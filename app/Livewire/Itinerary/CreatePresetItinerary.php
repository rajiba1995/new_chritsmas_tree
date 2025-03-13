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
use App\Models\ItineraryDetail;
use App\Helpers\CustomHelper;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\ItineraryBanner;

class CreatePresetItinerary extends Component
{
    use WithFileUploads;
    public $destinationId;
    public $itinerary_id;
    public $selectedDivision;
    public $categoryId;
    public $mainBanner = [];
    public $destinationName;
    public $categoryName;
    public $itinerary_syntax;
    public $itinerary_journey;
    public $night;
    public $errorMessage = '';
    public $uploadDestinationSlider = []; 
    public $uploadDayImages = [];
    public $day_by_divisions = [];
    public $showModal = false;
    public $modalImage = '';
    
    public $uploadMainBanner;
    public $name_of_lead, $welcome_to, $main_banner, $about_destination_title, $about_destination_text;
    public $destinationImages = [];
    public $dayImages = [];
    public $day_texts = []; 
    public $selected_day_wise_itinerary = [];
    
    public $selected_about_desc_banners = [];
    public $trip_highlights = []; // Array to store trip highlights

    public function mount($encryptedId){
        $itineraryExists = Itinerary::find($encryptedId);
        $this->itinerary_id =$encryptedId;
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

        // Get divisions
        $stay_by_journey = explode(',',$itineraryExists->stay_by_journey);
        if(count($stay_by_journey)>0){
            $days_journey = [];
            foreach($stay_by_journey as $k=>$journey){

                $hotels = Hotel::select('id', 'name')->where('division', $journey)->orderBy('name', 'ASC')->get()->toArray();

                
                $city = City::find($journey);
                $days_journey[$k+1]['division_id'] = $journey;
                $days_journey[$k+1]['division_name'] = $city?$city->name:"N/A";
                $days_journey[$k+1]['division_hotels'] =$hotels;

                $this->loadDayImages($k+1);
            }
            $this->day_by_divisions = $days_journey;

        }

        $this->ExistingData();
    }
    // Check Existing Itinerary Details

    public function ExistingData(){
        // Banner section
        $this->name_of_lead = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'banner_section')->where('field', 'name_of_lead')->value('value');
        $this->welcome_to = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'banner_section')->where('field', 'welcome_to')->value('value');
        $this->main_banner = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'banner_section')->where('field', 'main_banner')->value('value');

        // About Destination
        $this->about_destination_title = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'about_destination')->where('field', 'about_destination_title')->value('value');
        $this->about_destination_text = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'about_destination')->where('field', 'about_destination_text')->value('value');
        $this->trip_highlights = ItineraryDetail::where('itinerary_id', $this->itinerary_id)->where('header', 'about_destination')->where('field', 'like', 'trip_highlights_%')->pluck('value')->toArray();

        // Fetch all slider images from DB
        $this->loadDestinationImages();

        // Load Day wise data
        $this->day_texts = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
        ->where('header', 'LIKE', 'day_%')
        ->pluck('value', 'field')
        ->toArray();
    }
    
    public function addAboutDescHighlight()
    {
        $this->trip_highlights[] = ''; // Add an empty input field
    }

    public function removeAboutDescHighlight($index)
    {
        unset($this->trip_highlights[$index]); // Remove highlight
        $this->trip_highlights = array_values($this->trip_highlights); // Re-index array
        $this->deleteHighlightFromDB($index);
    }
    public function deleteHighlightFromDB($index)
    {
        $fieldName = 'trip_highlights_' . $index;
        ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'about_destination')
            ->where('field', $fieldName)
            ->delete();
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
    public function loadDestinationImages() {
        // Fetch all slider images from DB
        $this->destinationImages = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'about_destination')
            ->where('field', 'slider_image')
            ->pluck('value')
            ->toArray();
    }
    public function loadDayImages($index){
        $this->dayImages[$index] = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_image')
            ->pluck('value')
            ->toArray();
    }
   
    public function updateduploadDestinationSlider()
    {
        // dd($this->uploadDestinationSlider);
        DB::beginTransaction();

        try {
            // Validate each uploaded image
            $this->validate([
                'uploadDestinationSlider.*' => 'image|max:2048', // 2MB max per image
            ]);

            foreach ($this->uploadDestinationSlider as $image) {
                if ($image) {
                    $dynamicText = rand(1111, 9999);
                    $uploadedPath = CustomHelper::uploadImage($image, $dynamicText, $this->destinationName, 'itinerary');

                    // Save file path in database
                    ItineraryDetail::create([
                        'itinerary_id' => $this->itinerary_id,
                        'header' => 'about_destination',
                        'field' => 'slider_image',
                        'value' => $uploadedPath,
                    ]);
                }
            }

            DB::commit();

            // Reload images after upload
            $this->loadDestinationImages();

            session()->flash('success', 'Images uploaded successfully!');
            $this->reset('uploadDestinationSlider'); // Reset input after upload

        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Upload failed: ' . $e->getMessage());
        }
    }
    public function updatedUploadDayImages($images, $index)
    {
        // dd($this->uploadDestinationSlider);
        if (!isset($this->uploadDayImages[$index])) {
            $this->uploadDayImages[$index] = [];
        }
        DB::beginTransaction();

        try {
            // Validate each uploaded image
            $this->validate([
                "uploadDayImages.$index.*" => 'image|max:2048', // Validate each image (2MB max)
            ]);

            foreach ($images as $image) {
                if ($image) {
                    $dynamicText = rand(1111, 9999);
                    $uploadedPath = CustomHelper::uploadImage($image, $dynamicText, $this->destinationName, 'itinerary');

                    // Save file path in database
                    ItineraryDetail::create([
                        'itinerary_id' => $this->itinerary_id,
                        'header' => 'day_' . $index,
                        'field' => 'day_image',
                        'value' => $uploadedPath,
                    ]);
                }
            }

            DB::commit();
            // Fetch newly uploaded images
            $this->loadDayImages($index);
            session()->flash('success', 'Images uploaded successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Upload failed: ' . $e->getMessage());
        }
    }
    public function ItineraryImageDelete($slider_image){
        DB::beginTransaction();
    
        try {
            $item = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
                ->where('value', $slider_image)
                ->first();
    
            if ($item) {
                // Delete file from storage
                $filePath = $item->value; // Example: "storage/itinerary/west-bangal-5280-20250312093144.jpg"

                // Check if file exists using correct path
                if (Storage::exists(str_replace('storage/', 'public/', $filePath))) {
                    Storage::delete(str_replace('storage/', 'public/', $filePath));
                }
    
                // Delete from database
                $item->delete();
    
                // Reload updated images list
                $this->loadDestinationImages();
    
                DB::commit();
                session()->flash('success', 'Image deleted successfully!');
            } else {
                session()->flash('error', 'Image not found in the database!');
            }
    
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Deletion failed: ' . $e->getMessage());
        }
    }
   
    public function deleteDayImage($imgPath, $index){
        DB::beginTransaction();
    
        try {
            $item = ItineraryDetail::where('itinerary_id', $this->itinerary_id)
            ->where('header', 'day_' . $index)
            ->where('field', 'day_image')
            ->where('value', $imgPath)
            ->first();
    
            if ($item) {
                // Delete file from storage
                $filePath = $item->value; // Example: "storage/itinerary/west-bangal-5280-20250312093144.jpg"

                // Check if file exists using correct path
                if (Storage::exists(str_replace('storage/', 'public/', $filePath))) {
                    Storage::delete(str_replace('storage/', 'public/', $filePath));
                }
    
                // Delete from database
                $item->delete();
    
                 // Refresh images list
                $this->loadDayImages($index);
    
                DB::commit();
                session()->flash('success', 'Image deleted successfully!');
            } else {
                session()->flash('error', 'Image not found in the database!');
            }
    
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Deletion failed: ' . $e->getMessage());
        }
    }
    public function showImageModal($image)
    {
        $this->modalImage = $image;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function submitForm(){
        dd($this->all());
    }


    // Update Itinerary Data
    public function UpdateByKeyUp($header, $field, $value){
        ItineraryDetail::updateOrCreate(
            [
                'itinerary_id' => $this->itinerary_id,
                'header' => $header,
                'field' => $field,
            ],
            [
                'value' => $value,
            ]
        );
    }
    public function render()
    {
        $this->mainBanner = ItineraryBanner::where('destination_id', $this->destinationId)->get();
        return view('livewire.itinerary.create-preset-itinerary');
    }

   
}
