<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\State;
use App\Models\DivisionWiseSightseeing;
use App\Models\DivisionWiseSightseeingImage;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Helpers\CustomHelper;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class DivisionWiseSightseeingList extends Component
{
    use WithFileUploads;
    public $desitinations =[];
    public $divisions =[];
    public $selectedDestination = null;
    public $selectedDestinationName = null;
    public $selectedDivision = null;
    public $selectedDivisionName = null;
    public $seasion_types = [];
    public $selected_season_type =0; // Must be public for validation
    public $active_assign_new_modal = 0;
    public $active_assign_update_modal = 0;
    public $active_modal_for_image = 0;
    public $division_wise_sightseeing = [];
    public $active_sightseeing_images = [];


    public $sightseeings = []; // Holds dynamic activity rows
    public $files = []; // Holds uploaded files for each activity
    
    public $edit_sightseeings = [];
    public $update_files = []; // Holds uploaded files for each activity

    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::where('status', 1)
        ->orderBy('name', 'ASC');
        
        if ($this->selectedDestination) {
            $State->where('id', $this->selectedDestination);
        }
        
        $State = $State->first();
    
        if($State->id){
            $this->selectedDestinationName = $State->name;
            $this->getDestination($State->id);
        }
        $this->seasion_types = DB::table('seasion_types')->where('status', 1)->orderBy('title', 'ASC')->get();
        $this->addSightseeing(); // Start with one activity
        $this->files = collect();
    }
    public function getDestination($destination_id){
        $this->selectedDestination = $destination_id;
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::find($destination_id);
        if(count($this->divisions)>0){
            $city= City::where('state_id', $destination_id)->where('status', 1)->orderBy('name', 'ASC')->first();
           if($city){
                $this->selectedDivision = $city->id;
                $this->selectedDivisionName =$city->name;
           }else{
             session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');
           }
          
        }else{
            session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');

            $this->selectedDivision = null;
            $this->selectedDivisionName =null;
        }
        
        $this->division_wise_sightseeing  = $this->GetSightseeing();
    }
    public function GetSightseeing(){
        return DivisionWiseSightseeing::with('seasonType')->where('division_id', $this->selectedDivision)
        ->when($this->selected_season_type > 0, function ($query) {
            return $query->where('seasion_type_id', $this->selected_season_type);
        })
        ->orderBy('name', 'ASC')
        ->orderBy('seasion_type_id', 'ASC')
        ->get();
    }
    public function FilterSightseeingPointBySeasionType($value){
        $this->selected_season_type = $value; 
        $this->division_wise_sightseeing  = $this->GetSightseeing();
    }
   
    public function UpdateSeasonType($value){
        $this->edit_sightseeings['seasion_type_id'] = $value; 
    }
    public function FilterCabByDivision($value){
        $this->selectedDivision = $value; 
        $this->division_wise_sightseeing  = $this->GetSightseeing();
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
    }

    public function OpenNewSightSeeingModal($value){
        $this->active_assign_new_modal = $value=="yes"?1:0;

        // Reset all sightseeings fields
        if ($this->active_assign_new_modal) {
            $this->sightseeings = []; // Reset all sightseeings by setting the array to empty

            // If you need to initialize some fields with an empty template, you can add default values like this
            $this->sightseeings[] = [
                'name' => '',
                'ticket_price' => '',
                'files' => []
            ];
            unset($this->sightseeings[0]);
            unset($this->files[0]);
        }
    }

    public function ShowItemImage($id){
        $this->active_modal_for_image = 1;
        $this->active_sightseeing_images = DivisionWiseSightseeingImage::where('sightseeing_id', $id)->get();
    }

    
    public function EditSightSeeing($id){
        $this->active_assign_update_modal = 1;
        $activity = DivisionWiseSightseeing::with('images:sightseeing_id,file_path')->find($id);
        $this->edit_sightseeings = $activity->toArray();
        $this->resetValidation();
    }
    public function CloseImageModal(){
        $this->active_modal_for_image = 0;
        $this->active_sightseeing_images = [];
    }
    public function CloseEditModal(){
        $this->active_assign_update_modal = 0;
        unset($this->edit_sightseeings);
        unset($this->update_files);
    }

    public function addSightseeing(){
        $this->sightseeings[] = ['name' => '', 'ticket_price' => ''];
        $this->files[] = null; // Placeholder for the file
    }
    public function removeSightSeing($index)
    {
        unset($this->sightseeings[$index]);
        unset($this->files[$index]);
    }
    
    public function getDivisionNameById($divisionId){
        $division = City::find($divisionId);
        return $division ? $division->name : 'unknown-division';
    }
    public function submitForm()
    {
        $this->validate([
            'sightseeings.*.name' => 'required|string|max:255',
            'selected_season_type' => 'required',
            'selectedDivision' => 'required',
            'files.*.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sightseeings.*.ticket_price' => 'required|numeric',
        ], [
            'sightseeings.*.name.required' => 'This field is required.',
            'selected_season_type.required' => 'This field is required.',
            'selectedDivision.required' => 'This field is required.',
            'files.*.*.required' => 'This field is required.',
            'sightseeings.*.ticket_price.required' => 'This field is required',
        ]);

        try {
            DB::beginTransaction(); // Start transaction
            // Check if the selected season type and division are provided
            if ($this->selected_season_type == 0) {
                session()->flash('new-sightseeing-error', 'Please Choose a Season Type!');
                return; // Stop further execution
            }

            if (!$this->selectedDivision) {
                session()->flash('new-sightseeing-error', 'Please Choose a Division!');
                return; // Stop further execution
            }
            if (count($this->sightseeings)==0) {
                session()->flash('new-sightseeing-error', 'Please Choose atleast one sightseeing point!');
                return; // Stop further execution
            }
        // Loop through sightseeings and save them to the database
       
            foreach ($this->sightseeings as $index => $activity) {
                // Save the activity record
                $activityRecord = DivisionWiseSightseeing::create([
                    'name' => $activity['name'], // Ensure this key exists
                    'ticket_price' => !empty($activity['ticket_price']) ? $activity['ticket_price'] : 0, // Save 0 if empty
                    'seasion_type_id' => $this->selected_season_type, // Validate this is set
                    'division_id' => $this->selectedDivision, // Validate this is set
                ]);
        
                // Handle file uploads
                $uploadedFiles = $this->files[$index] ?? null;
                if ($uploadedFiles && is_array($uploadedFiles)) {
                    foreach ($uploadedFiles as $file) {
                        $dynamicText = $activity['name'];
                        $divisionName = $this->selectedDivisionName; // Assuming you have a division name
                        $uploadedPath = CustomHelper::uploadImage($file, $dynamicText, $divisionName, 'sightseeings');
                        // Save the uploaded file record
                        DivisionWiseSightseeingImage::create([
                            'sightseeing_id' => $activityRecord->id,
                            'file_path' => $uploadedPath,
                        ]);
                    }
                }
            }
        
            DB::commit(); // Commit transaction
            session()->flash('success', 'Sightseeing point saved successfully!');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            session()->flash('new-sightseeing-error', 'Error: ' . $e->getMessage());
            return; // Stop further execution
        }

        // Success message
        session()->flash('success', 'Sightseeing point saved successfully!');
        $this->active_assign_new_modal = 0;
        $this->FilterSightseeingPointBySeasionType(0); //for All
        $this->sightseeings = []; // Reset all sightseeings by setting the array to empty
        // If you need to initialize some fields with an empty template, you can add default values like this
        $this->sightseeings[] = [
            'name' => '',
            'type' => 'PAID',
            'price' => '',
            'ticket_price' => '',
            'files' => []
        ];
    }

    public function updateActivity()
    {
        $this->validate(
            [
                'edit_sightseeings.name' => 'required|string|max:255',
                'edit_sightseeings.type' => 'required|in:PAID,UNPAID',
                'edit_sightseeings.seasion_type_id' => 'required|exists:seasion_types,id',
                'selectedDivision' => 'required|exists:cities,id',
                // 'update_files.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ],
            [
                'edit_sightseeings.name.required' => 'The activity name is required.',
                'edit_sightseeings.type.required' => 'The activity type is required.',
                'edit_sightseeings.type.in' => 'Type must be either PAID or UNPAID.',
                'edit_sightseeings.seasion_type_id.required' => 'The season type is required.',
                'selectedDivision.required' => 'The division is required.',
                // 'update_files.*.image' => 'Each file must be an image.',
                // 'update_files.*.mimes' => 'Each file must be a JPG, JPEG, PNG, or WEBP image.',
                // 'update_files.*.max' => 'Each file must not exceed 2MB in size.',
            ]
        );
        if ($this->edit_sightseeings['type'] === 'PAID') {
            $this->validate([
                'edit_sightseeings.price' => 'required|numeric|gt:0',
                'edit_sightseeings.ticket_price' => 'required|numeric|gt:0',
            ],[
                'edit_sightseeings.price.required' => 'This field is required',
                'edit_sightseeings.price.numeric' => 'Price must be a valid number.',
                'edit_sightseeings.price.gt' => 'Price must be greater than 0.',
                'edit_sightseeings.ticket_price.required' => 'This field is required',
                'edit_sightseeings.ticket_price.numeric' => 'Price must be a valid number.',
                'edit_sightseeings.ticket_price.gt' => 'Price must be greater than 0.',
            ]);
        }
       
        try {
            DB::beginTransaction(); // Start transaction
            // Check if the selected season type and division are provided
            if ($this->edit_sightseeings['seasion_type_id'] == 0) {
                session()->flash('edit-activity-error', 'Please Choose a Season Type!');
                return; // Stop further execution
            }

            if (!$this->selectedDivision) {
                session()->flash('edit-activity-error', 'Please Choose a Division!');
                return; // Stop further execution
            }

             // Find the activity record that you want to update
            $activityRecord = DivisionWiseSightseeing::findOrFail($this->edit_sightseeings['id']); // Ensure $id is available
           
            // Update the activity record with the new data
            $activityRecord->update([
                'name' => $this->edit_sightseeings['name'], // Ensure this key exists
                'type' => $this->edit_sightseeings['type'], // Ensure this key exists and is 'PAID' or 'UNPAID'
                'price' => $this->edit_sightseeings['type'] ==="PAID" ? $this->edit_sightseeings['price'] : 0, // Save 0 if empty
                'ticket_price' => $this->edit_sightseeings['type']==="PAID" ? $this->edit_sightseeings['ticket_price'] : 0, // Save 0 if empty
                'seasion_type_id' => $this->edit_sightseeings['seasion_type_id'], // Validate this is set
                'division_id' => $this->selectedDivision, // Validate this is set
            ]);
           
    
            // Handle file uploads
            $uploadedFiles = $this->update_files[0] ?? null;
            if ($uploadedFiles && is_array($uploadedFiles)) {
                foreach ($uploadedFiles as $file) {
                    $dynamicText = $activityRecord->name;
                    $divisionName = $this->selectedDivisionName; // Assuming you have a division name
                    $uploadedPath = CustomHelper::uploadImage($file, $dynamicText, $divisionName, 'sightseeings');
                    // Save the uploaded file record
                    DivisionWiseSightseeingImage::create([
                        'sightseeing_id' => $activityRecord->id,
                        'file_path' => $uploadedPath,
                    ]);
                }
            }
           
            DB::commit(); // Commit transaction
            session()->flash('success', 'Sightseeing point update successfully!');
            $this->CloseEditModal();
            $this->FilterSightseeingPointBySeasionType(0); //for All
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            session()->flash('new-sightseeing-error', 'Error: ' . $e->getMessage());
            return; // Stop further execution
        }
    
        // Proceed with the update logic
    }
    
    public function DeleteSightSeeingItem($id)
    {
        $activity = DivisionWiseSightseeing::find($id);
        if ($activity) {
            $activity->delete();
            $this->mount(); // Or call any method to refresh data
            session()->flash('success', 'Sightseeing point deleted successfully!');
        } 
    }

    public function deleteItemImage($imageId)
    {
        // Find the image by ID
        $image = DivisionWiseSightseeingImage::find($imageId);
        if ($image) {
            $filePath = $image->file_path;

            $filePath = public_path($image->file_path);

            // Check if the file exists and delete it using unlink
            if (file_exists($filePath)) {
                unlink($filePath); 
            }
            // Delete the image record from the database
            $image->delete();

            // Re-fetch the active images
            $this->active_sightseeing_images = DivisionWiseSightseeingImage::where('sightseeing_id', $image->sightseeing_id)->get();
            $this->active_modal_for_image = 1;
        } 
    }
    public function resetPage()
    {
        // Reset component state to the initial state
        $this->reset(); // Resets all public properties
        $this->mount(); // Optionally, reinitialize any logic from mount()
    }
    public function render()
    {
        return view('livewire.division-wise-sightseeing-list');
    }
}

