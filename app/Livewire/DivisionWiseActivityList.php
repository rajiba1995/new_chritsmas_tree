<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\State;
use App\Models\DivisionWiseActivity;
use App\Models\DivisionWiseActivityImage;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Helpers\CustomHelper;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class DivisionWiseActivityList extends Component
{
    use WithFileUploads;
    public $desitinations =[];
    public $divisions =[];
    public $selectedDestination = null;
    public $selectedDestinationName = null;
    public $selectedDivision = null;
    public $selectedDivisionName = null;
    public $payment_type =0; // Must be public for validation
    public $active_assign_new_modal = 0;
    public $active_assign_update_modal = 0;
    public $active_modal_for_image = 0;
    public $active_modal_for_content = 0;
    public $content_name;
    public $description;
    public $setDescriptionValue;
    public $update_description_id;
    public $division_wise_cabs = [];
    public $active_activity_images = [];

    public $assign_season_type; // Must be public for validation
    public $assign_cab_id = [];

    public $activities = []; // Holds dynamic activity rows
    public $files = []; // Holds uploaded files for each activity
    
    public $edit_activities = [];
    public $update_files = []; // Holds uploaded files for each activity

    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::where('status', 1)
        ->orderBy('name', 'ASC');
        
        if ($this->selectedDestination) {
            $State->where('id', $this->selectedDestination);
        }
        
        $State = $State->first();
        $this->selectedDestinationName = $State->name;
        if($State->id){
            $this->getDestination($State->id);
        }
        $this->addActivity(); // Start with one activity
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
        
        $this->division_wise_cabs  = $this->GetActivity();
    }
    public function GetActivity(){
        return DivisionWiseActivity::where('division_id', $this->selectedDivision)
        ->when($this->payment_type > 0, function ($query) {
            return $query->where('type', $this->payment_type);
        })
        ->orderBy('name', 'ASC')
        ->orderBy('id', 'DESC')
        ->get();
    }
    public function FilterCabByPaymentType($value){
        $this->payment_type = $value; 
        $this->division_wise_cabs  = $this->GetActivity();
    }
    public function FilterCabByDivision($value){
        $this->selectedDivision = $value; 
        $this->division_wise_cabs  = $this->GetActivity();
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
    }

    public function OpenNewCabModal($value){
        $this->active_assign_new_modal = $value=="yes"?1:0;

        // Reset all activities fields
        if ($this->active_assign_new_modal) {
            $this->activities = []; // Reset all activities by setting the array to empty

            // If you need to initialize some fields with an empty template, you can add default values like this
            $this->activities[] = [
                'name' => '',
                'type' => 'PAID',
                'price' => '',
                'ticket_price' => '',
                'files' => []
            ];
            unset($this->activities[0]);
            unset($this->files[0]);
        }
    }

    public function ShowItemImage($id){
        $this->active_modal_for_image = 1;
        $this->active_activity_images = DivisionWiseActivityImage::where('division_wise_activity_id', $id)->get();
    }
    public function ShowItemContent($id){
        // Reset fields to prevent old data from showing
        $this->reset(['content_name','description','update_description_id','setDescriptionValue']);
    
        // Find the content
        $content = DivisionWiseActivity::find($id);
        
        // Check if content exists before assigning
        if ($content) {
            $this->update_description_id = $id;
            $this->content_name = $content->name;
            
            $this->description = $content->description;
        } else {
            // Handle case where item does not exist (optional)
            $this->description = null;
        }
    
        // Show modal
        // dd($this->description);
        $this->dispatch('editor_load',['setDescriptionValue'=>$this->description]);
        $this->active_modal_for_content = 1;
    }
    
    
    public function EditActivityItem($id){
        $this->active_assign_update_modal = 1;
        $activity = DivisionWiseActivity::with('images:division_wise_activity_id,file_path')->find($id);
        $this->edit_activities = $activity->toArray();
        $this->resetValidation();
    }
    public function CloseImageModal(){
        $this->active_modal_for_image = 0;
        $this->active_activity_images = [];
    }
    public function CloseContentModal(){
        $this->active_modal_for_content = 0;
    }
    public function CloseEditModal(){
        $this->active_assign_update_modal = 0;
        $this->reset(['edit_activities', 'update_files']);
    }

    public function addActivity(){
        $this->activities[] = ['name' => '', 'type' => 'PAID', 'price' => '', 'ticket_price' => ''];
        $this->files[] = null; // Placeholder for the file
    }
    public function removeActivity($index)
    {
        unset($this->activities[$index]);
        unset($this->files[$index]);
    }
    
    public function updateType($index, $type){
        // Update the 'type' field for the specific activity
        $this->activities[$index]['type'] = $type;
    }
    public function UpdateTypeFromEdit($type){
        // Update the 'type' field for the specific activity
        $this->edit_activities['type'] = $type;
        if($type==="PAID"){
            $this->edit_activities['price'] = null;
            $this->edit_activities['ticket_price'] = null;
        }
    }
    public function getDivisionNameById($divisionId){
        $division = City::find($divisionId);
        return $division ? $division->name : 'unknown-division';
    }
    public function submitForm()
    {
        $this->validate([
            'activities.*.name' => 'required|string|max:255',
            'activities.*.type' => 'required|in:PAID,UNPAID',
            'selectedDivision' => 'required',
            'files.*.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'activities.*.price' => 'required_if:activities.*.type,PAID|nullable|numeric',
            'activities.*.ticket_price' => 'required_if:activities.*.type,PAID|nullable|numeric',
        ], [
            'activities.*.name.required' => 'This field is required.',
            'activities.*.type.required' => 'This field is required.',
            'selectedDivision.required' => 'This field is required.',
            'files.*.*.required' => 'This field is required.',
            'activities.*.price.required_if' => 'This field is required',
            'activities.*.ticket_price.required_if' => 'This field is required',
        ]);

        try {
            DB::beginTransaction(); // Start transaction
          

            if (!$this->selectedDivision) {
                session()->flash('new-activity-error', 'Please Choose a Division!');
                return; // Stop further execution
            }
            if (count($this->activities)==0) {
                session()->flash('new-activity-error', 'Please Choose atleast one activity!');
                return; // Stop further execution
            }
        // Loop through activities and save them to the database
       
            foreach ($this->activities as $index => $activity) {
                // Save the activity record
                $activityRecord = DivisionWiseActivity::create([
                    'name' => $activity['name'], // Ensure this key exists
                    'type' => $activity['type'], // Ensure this key exists and is 'PAID' or 'UNPAID'
                    'price' => !empty($activity['price']) ? $activity['price'] : 0, // Save 0 if empty
                    'ticket_price' => !empty($activity['ticket_price']) ? $activity['ticket_price'] : 0, // Save 0 if empty
                    'division_id' => $this->selectedDivision, // Validate this is set
                ]);
        
                // Handle file uploads
                $uploadedFiles = $this->files[$index] ?? null;
                if ($uploadedFiles && is_array($uploadedFiles)) {
                    foreach ($uploadedFiles as $file) {
                        // $dynamicText = $activity['name'];
                        $dynamicText = $activity['name'].rand(1111,9999);
                        $divisionName = $this->selectedDivisionName; // Assuming you have a division name
                        $uploadedPath = CustomHelper::uploadImage($file, $dynamicText, $divisionName, 'activities');
                        // Save the uploaded file record
                        DivisionWiseActivityImage::create([
                            'division_wise_activity_id' => $activityRecord->id,
                            'destination_id' => $this->selectedDestination,
                            'file_path' => $uploadedPath,
                        ]);
                    }
                }
            }
        
            DB::commit(); // Commit transaction
            session()->flash('success', 'Activities saved successfully!');
            $this->division_wise_cabs  = $this->GetActivity();
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            session()->flash('new-activity-error', 'Error: ' . $e->getMessage());
            return; // Stop further execution
        }

        // Success message
        session()->flash('success', 'Activities saved successfully!');
        $this->active_assign_new_modal = 0;
        $this->activities = []; // Reset all activities by setting the array to empty
        // If you need to initialize some fields with an empty template, you can add default values like this
        $this->activities[] = [
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
                'edit_activities.name' => 'required|string|max:255',
                'edit_activities.type' => 'required|in:PAID,UNPAID',
                'selectedDivision' => 'required|exists:cities,id',
                // 'update_files.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ],
            [
                'edit_activities.name.required' => 'The activity name is required.',
                'edit_activities.type.required' => 'The activity type is required.',
                'edit_activities.type.in' => 'Type must be either PAID or UNPAID.',
                'selectedDivision.required' => 'The division is required.',
                // 'update_files.*.image' => 'Each file must be an image.',
                // 'update_files.*.mimes' => 'Each file must be a JPG, JPEG, PNG, or WEBP image.',
                // 'update_files.*.max' => 'Each file must not exceed 2MB in size.',
            ]
        );
        if ($this->edit_activities['type'] === 'PAID') {
            $this->validate([
                'edit_activities.price' => 'required|numeric|gt:0',
                'edit_activities.ticket_price' => 'required|numeric|gt:0',
            ],[
                'edit_activities.price.required' => 'This field is required',
                'edit_activities.price.numeric' => 'Price must be a valid number.',
                'edit_activities.price.gt' => 'Price must be greater than 0.',
                'edit_activities.ticket_price.required' => 'This field is required',
                'edit_activities.ticket_price.numeric' => 'Price must be a valid number.',
                'edit_activities.ticket_price.gt' => 'Price must be greater than 0.',
            ]);
        }
       
        try {
            DB::beginTransaction(); // Start transaction
           
            if (!$this->selectedDivision) {
                session()->flash('edit-activity-error', 'Please Choose a Division!');
                return; // Stop further execution
            }

             // Find the activity record that you want to update
            $activityRecord = DivisionWiseActivity::findOrFail($this->edit_activities['id']); // Ensure $id is available
           
            // Update the activity record with the new data
            $activityRecord->update([
                'name' => $this->edit_activities['name'], // Ensure this key exists
                'type' => $this->edit_activities['type'], // Ensure this key exists and is 'PAID' or 'UNPAID'
                'price' => $this->edit_activities['type'] ==="PAID" ? $this->edit_activities['price'] : 0, // Save 0 if empty
                'ticket_price' => $this->edit_activities['type']==="PAID" ? $this->edit_activities['ticket_price'] : 0, // Save 0 if empty
                'division_id' => $this->selectedDivision, // Validate this is set
            ]);
           
    
            // Handle file uploads
            $uploadedFiles = $this->update_files[0] ?? null;
            if ($uploadedFiles && is_array($uploadedFiles)) {
                foreach ($uploadedFiles as $file) {
                    $dynamicText = $activityRecord->name.rand(1111,9999);
                    $divisionName = $this->selectedDivisionName; // Assuming you have a division name
                    $uploadedPath = CustomHelper::uploadImage($file, $dynamicText, $divisionName, 'activities');
                    // Save the uploaded file record
                    DivisionWiseActivityImage::create([
                        'division_wise_activity_id' => $activityRecord->id,
                        'destination_id' => $this->selectedDestination,
                        'file_path' => $uploadedPath,
                    ]);
                }
            }
           
            DB::commit(); // Commit transaction
            session()->flash('success', 'Activities update successfully!');
            $this->division_wise_cabs  = $this->GetActivity();
            $this->CloseEditModal();
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaction on error
            session()->flash('new-activity-error', 'Error: ' . $e->getMessage());
            return; // Stop further execution
        }
    
        // Proceed with the update logic
    }
    public function DeleteActivityItem($id)
    {
        $this->dispatch('showConfirm', ['itemId' => $id]);
    }
    public function deleteItem($id)
    {
        $activity = DivisionWiseActivity::find($id);
        if ($activity) {
            $activity->delete();
            $this->division_wise_cabs  = $this->GetActivity();
            session()->flash('success', 'Activity deleted successfully!');
        } 
    }
    public function UpdateDescription($status){
        if($status==="true"){
            $this->division_wise_cabs  = $this->GetActivity();
            $this->active_modal_for_content = 0;
            session()->flash('success', 'Activity content updated successfully!');
        }else{
            session()->flash('activity-update-error', 'Something went wrong!');
        }
    }
    

    public function deleteItemImage($imageId)
    {
        // Find the image by ID
        $image = DivisionWiseActivityImage::find($imageId);
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
            $this->active_activity_images = DivisionWiseActivityImage::where('division_wise_activity_id', $image->division_wise_activity_id)->get();
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
        return view('livewire.division-wise-activity-list');
    }
}
