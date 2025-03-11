<?php

namespace App\Livewire\Itinerary;

use Livewire\Component;
use App\Models\State;
use App\Models\City;
use App\Models\Hotel;
use App\Models\Category;
use App\Models\DivisionWiseSightseeingImage;
use App\Models\DivisionWiseActivityImage;
use App\Models\Itinerary;
use App\Helpers\CustomHelper;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

use App\Models\ItineraryBanner;

class CreatePresetItinerary extends Component
{
    use WithFileUploads;
    public $destinationId;
    public $selectedDivision;
    public $categoryId;
    public $mainBanner = [];
    public $destinationName;
    public $categoryName;
    public $itinerary_syntax;
    public $itinerary_journey;
    public $night;
    public $errorMessage = '';
    public $destinationImages = [];
    public $day_by_divisions = [];
    
    public $uploadMainBanner;
    public $selected_banner, $about_destination_title, $about_destination_text;
    public $selected_day_wise_itinerary = [];
    
    public $selected_about_desc_banners = [];
    public $about_desc_trip_highlights = ['']; // Initialize with one input

    public function mount($encryptedId){
        $itineraryExists = Itinerary::find($encryptedId);
        $categoryExists = Category::where('id', $itineraryExists->hotel_category)->first();
        $this->destinationName = $itineraryExists->destination->name;
        $this->categoryName = $categoryExists->name;
        $this->destinationId = $itineraryExists->destination_id;
        $this->categoryId = $itineraryExists->hotel_category;
        $this->itinerary_syntax = $itineraryExists->itinerary_syntax;
        $this->itinerary_journey = $itineraryExists->itinerary_journey;
        $city = City::where('state_id', $itineraryExists->destination_id)->first();
        if($city){
            $this->selectedDivision = $city->id;
        }

        $existing_activity_images = DivisionWiseActivityImage::where('destination_id', $this->destinationId)
        ->pluck('file_path')
        ->filter() // Ensure no null values
        ->toArray();
        $existing_sightseeing_images = DivisionWiseSightseeingImage::where('destination_id', $this->destinationId)
        ->pluck('file_path')
        ->filter() // Ensure no null values
        ->toArray();
        $this->destinationImages = array_merge($existing_activity_images,$existing_sightseeing_images);

        // Get divisions
        $stay_by_journey = explode(',',$itineraryExists->stay_by_journey);
        if(count($stay_by_journey)>0){
            $days_journey = [];
            foreach($stay_by_journey as $k=>$journey){

                $activity_images = DivisionWiseActivityImage::whereHas('activity', function ($query) use ($journey) {
                    $query->where('division_id', $journey);
                })->pluck('file_path')
                ->filter() // Ensure no null values
                ->toArray();

                $sightseeing_images = DivisionWiseSightseeingImage::whereHas('sightseeing', function ($query) use ($journey) {
                    $query->where('division_id', $journey);
                })->pluck('file_path')
                ->filter() // Ensure no null values
                ->toArray();
                $division_images = array_merge($activity_images,$sightseeing_images);

                $hotels = Hotel::select('id', 'name')->where('division', $journey)->orderBy('name', 'ASC')->get()->toArray();

                
                $city = City::find($journey);
                $days_journey[$k+1]['division_id'] = $journey;
                $days_journey[$k+1]['division_name'] = $city?$city->name:"N/A";
                $days_journey[$k+1]['division_images'] =$division_images;
                $days_journey[$k+1]['division_hotels'] =$hotels;
            }
            $this->day_by_divisions = $days_journey;
            // dd($this->day_by_divisions);
        }
    }

    
    public function addAboutDescHighlight()
    {
        $this->about_desc_trip_highlights[] = ''; // Add a new empty input field
    }

    public function removeAboutDescHighlight($index)
    {
        unset($this->about_desc_trip_highlights[$index]); 
        $this->about_desc_trip_highlights = array_values($this->about_desc_trip_highlights); // Reindex array
    }

    public function updatedUploadMainBanner()
    {
        // Validate Image
        DB::beginTransaction();
        try {
            $this->validate([
                'uploadMainBanner' => 'image|max:2048', // 2MB Max
            ]);
            $store = new ItineraryBanner;
            $store->division_id = $this->selectedDivision;
            $store->destination_id = $this->destinationId;

            $uploadedFiles = $this->uploadMainBanner ?? null;
            if ($uploadedFiles) {
                $dynamicText =rand(1111,9999);
                $destinationName = $this->destinationName; // Assuming you have a division name
                $uploadedPath = CustomHelper::uploadImage($uploadedFiles, $dynamicText, $destinationName, 'itinerary_banners');
                $store->image = $uploadedPath;
            }
            $store->save();
            DB::commit();
            session()->flash('success', 'Banner uploaded successfully!');
        } catch (\Exception $e) {
            $this->reset(['uploadMainBanner']);
            DB::rollBack(); // Rollback on error
            session()->flash('error', 'Failed: ' . $e->getMessage());
        }
        
    }

    public function updateDayImages($index, $sub_index, $value){
      if($this->selected_day_wise_itinerary[$index]['images_value'][$sub_index]){
        $this->selected_day_wise_itinerary[$index]['images'][$sub_index] = $value;
      }else{
        // Remove the index if unchecked
        unset($this->selected_day_wise_itinerary[$index]['images'][$sub_index]);
      }
    }
    public function submitForm(){
        dd($this->all());
    }
    public function render()
    {
        $this->mainBanner = ItineraryBanner::where('destination_id', $this->destinationId)->get();
        return view('livewire.itinerary.create-preset-itinerary');
    }

   
}
