<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ItineraryBanner;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use App\Helpers\CustomHelper;
class DivisionWiseBannerList extends Component
{
    use WithFileUploads;
    public $division_wise_banners =[];
    public $divisions = [];
    public $desitinations;
    public $selectedDestination;
    public $selectedDivision;
    public $selectedDestinationName;
    public $selectedDivisionName;
    public $active_assign_new_modal;
    public $banner_title ="";
    public $banner_image;

    protected $rules = [
        'banner_title' => 'required|string|max:255',
        'banner_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048', // Allow only specific image types
    ];

    protected $messages = [
        'banner_title.required' => 'The banner title is required.',
        'banner_title.string' => 'The banner title must be a string.',
        'banner_title.max' => 'The banner title may not be greater than 255 characters.',
        'banner_image.image' => 'The uploaded file must be an image.',
        'banner_image.mimes' => 'Only jpg, jpeg, png, and webp files are allowed.',
        'banner_image.max' => 'The image must not be greater than 2MB.',
    ];

    public function updatedBannerImage()
    {
        $this->validate();
    }
    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::where('status', 1)->orderBy('name', 'ASC')->first();
        $this->selectedDestinationName = $State->name;
        if($State->id){
            $this->getDestination($State->id);
        }
    }
    public function getDestination($destination_id){
        $this->selectedDestination = $destination_id;
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        if(count($this->divisions)>0){
            $city= City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->first();
            $this->selectedDivision = $city->id;
            $this->selectedDivisionName =$city->name;
        }else{
            $this->selectedDivision = null;
            $this->selectedDivisionName =null;
        }
        $this->division_wise_banners  = $this->GetBanner();
    }
    public function GetBanner(){
        return ItineraryBanner::where('division_id', $this->selectedDivision)
        ->orderBy('title', 'ASC')
        ->get();
    }

    public function FilterBannerByDivision($value){
        $this->selectedDivision = $value; 
        $this->division_wise_banners  = $this->GetBanner();
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
    }
    public function OpenNewCabModal($value){
        // $this->reset(['assign_season_type', 'assign_cab_id']);
        $this->banner_title = "";
        $this->reset(['banner_title', 'banner_image']);
        $this->active_assign_new_modal = $value=="yes"?1:0;
    }

    public function DeleteBannerItem($id)
    {
        $this->dispatch('showConfirm', ['itemId' => $id]);
    }
    public function deleteItem($id)
    {
        $banner = ItineraryBanner::find($id);
        if ($banner) {
            $banner->delete();
            $this->division_wise_banners  = $this->GetBanner();
            session()->flash('success', 'Banner deleted successfully!');
        } 
    }
    public function submitForm(){
        $this->validate();
        try {
            DB::beginTransaction(); // Start transaction
            $store =new ItineraryBanner;
            $store->title = $this->banner_title;
            $store->division_id = $this->selectedDivision;
            $store->destination_id = $this->selectedDestination;

            $uploadedFiles = $this->banner_image ?? null;
            if ($uploadedFiles) {
                $dynamicText =rand(1111,9999);
                $divisionName = $this->selectedDivisionName; // Assuming you have a division name
                $uploadedPath = CustomHelper::uploadImage($uploadedFiles, $dynamicText, $divisionName, 'itinerary_banners');
                $store->image = $uploadedPath;
            }
            $store->save();
            DB::commit(); // Commit transaction
            $this->banner_title = "";
            $this->reset(['banner_title', 'banner_image']);
            $this->active_assign_new_modal = 0;
            $this->division_wise_banners  = $this->GetBanner();
            session()->flash('success', 'Banner saved successfully!');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            session()->flash('assign_error', 'Error: ' . $e->getMessage());
            return; // Stop further execution
        }
    }
    public function render()
    {
        return view('livewire.division-wise-banner-list');
    }
}
