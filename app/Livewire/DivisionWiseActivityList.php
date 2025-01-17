<?php

namespace App\Livewire;

use App\Models\Cab;
use App\Models\City;
use App\Models\State;
use App\Models\DivisionWiseActivity;
use App\Models\DivisionWiseCab;
use App\Models\DivisionWiseActivityImage;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Helpers\CustomHelper;
use Livewire\WithFileUploads;


class DivisionWiseActivityList extends Component
{
    use WithFileUploads;
    public $desitinations =[];
    public $divisions =[];
    public $cabs =[];
    public $selectedDestination = null;
    public $selectedDestinationName = null;
    public $selectedDivision = null;
    public $selectedDivisionName = null;
    public $seasion_types = [];
    public $selected_season_type =0; // Must be public for validation
    public $payment_type =0; // Must be public for validation
    public $active_assign_new_modal = 0;
    public $division_wise_cabs = [];

    public $assign_season_type; // Must be public for validation
    public $assign_cab_id = [];

    public $activities = []; // Holds dynamic activity rows
    public $files = []; // Holds uploaded files for each activity

    public function mount(){
        $this->desitinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::where('status', 1)->orderBy('name', 'ASC')->first();
        $this->selectedDestinationName = $State->name;
        if($State->id){
            $this->getDestination($State->id);
        }
        $this->seasion_types = DB::table('seasion_types')->where('status', 1)->orderBy('title', 'ASC')->get();
        $this->cabs = Cab::where('status', 1)->orderBy('title', 'ASC')->get();
        $this->addActivity(); // Start with one activity
        $this->files = collect();
    }
    public function getDestination($destination_id){
        $this->selectedDestination = $destination_id;
        $this->divisions = City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->get();
        $State = State::find($destination_id);
        if(count($this->divisions)>0){
            $city= City::where('state_id', $this->selectedDestination)->where('status', 1)->orderBy('name', 'ASC')->first();
            $this->selectedDivision = $city->id;
            $this->selectedDivisionName =$city->name;
        }else{
            session()->flash('error', 'Please add a division first for the ' . $State->name . ' destination. <a href="' . route('admin.division.index') . '" class="text-primary">Click here to add.</a>');

            $this->selectedDivision = null;
            $this->selectedDivisionName =null;
        }
        
        $this->division_wise_cabs  = $this->GetCab();
    }
    public function GetCab(){
        return DivisionWiseCab::where('division_id', $this->selectedDivision)
        ->when($this->selected_season_type > 0, function ($query) {
            return $query->where('seasion_type_id', $this->selected_season_type);
        })
        ->orderBy('seasion_type_id', 'ASC')
        ->get();
    }
    public function FilterCabBySeasionType($value){
        $this->selected_season_type = $value; 
        $this->division_wise_cabs  = $this->GetCab();
    }
    public function FilterCabByPaymentType($value){
        $this->payment_type = $value; 
        $this->division_wise_cabs  = $this->GetCab();
    }
    public function FilterCabByDivision($value){
        $this->selectedDivision = $value; 
        $this->division_wise_cabs  = $this->GetCab();
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
        }
    }


    public function addActivity(){
        $this->activities[] = ['name' => '', 'type' => 'PAID', 'price' => '', 'ticket_price' => ''];
        $this->files[] = null; // Placeholder for the file
    }
    public function removeActivity($index)
    {
        unset($this->activities[$index]);
        unset($this->files[$index]);
    
        // Convert to collections if needed and re-index
        // $this->activities = collect($this->activities);
        // $this->files = collect($this->files);
    
        // $this->activities = $this->activities->values()->toArray();
        // $this->files = $this->files->values()->toArray();
    }
    
    

    public function updateType($index, $type){
        // Update the 'type' field for the specific activity
        $this->activities[$index]['type'] = $type;
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
            'selected_season_type' => 'required',
            'selectedDivision' => 'required',
            'files.*.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        // Check if the selected season type and division are provided
        if ($this->selected_season_type == 0) {
            session()->flash('new-activity-error', 'Please Choose a Season Type!');
            return; // Stop further execution
        }

        if (!$this->selectedDivision) {
            session()->flash('new-activity-error', 'Please Choose a Division!');
            return; // Stop further execution
        }
        // Loop through activities and save them to the database
        try {
            DB::beginTransaction(); // Start transaction
        
            foreach ($this->activities as $index => $activity) {
                // Save the activity record
                $activityRecord = DivisionWiseActivity::create([
                    'name' => $activity['name'], // Ensure this key exists
                    'type' => $activity['type'], // Ensure this key exists and is 'PAID' or 'UNPAID'
                    'price' => !empty($activity['price']) ? $activity['price'] : 0, // Save 0 if empty
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
                        $uploadedPath = CustomHelper::uploadImage($file, $dynamicText, $divisionName, 'activities');
                        // Save the uploaded file record
                        DivisionWiseActivityImage::create([
                            'division_wise_activity_id' => $activityRecord->id,
                            'file_path' => $uploadedPath,
                        ]);
                    }
                }
            }
        
            DB::commit(); // Commit transaction
            session()->flash('success', 'Activities saved successfully!');
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

    // public function resetFile(){
    //     // Remove temporary files
    //     foreach ($this->files as $fileSet) {
    //         if (is_array($fileSet)) {
    //             foreach ($fileSet as $file) {
    //                 if (method_exists($file, 'delete')) {
    //                     $file->delete(); // Ensure the temporary file is removed
    //                 }
    //             }
    //         }
    //     }
    // }

    // public function submitForm()
    // {
    //     // Validate the form inputs
    //     $this->validate([
    //         'assign_season_type' => 'required',
    //         'assign_cab_id' => 'required|array|min:1', // Validate as an array with at least one selected item
    //     ], [
    //         'assign_season_type.required' => 'Please select a season type.',
    //         'assign_cab_id.required' => 'Please select at least one cab.',
    //         'assign_cab_id.min' => 'Please select at least one cab.',
    //     ]);
     
    //     // Check if the combination of season type and cab(s) already exists in the division_wise_cabs table
    //     foreach ($this->assign_cab_id as $cab_id) {
    //         $existingRecord = DivisionWiseCab::where('division_id', $this->selectedDivision)
    //                                         ->where('seasion_type_id', $this->assign_season_type)
    //                                         ->where('cab_id', $cab_id)
    //                                         ->exists(); // Check if the record exists

    //         // If any record exists, return with a message
    //         if ($existingRecord) {
    //             session()->flash('assign_error', 'This combination already exists.');
    //             return; // Prevent further processing if record exists
    //         }
    //     }

    //     // Save the data if no existing record is found
    //     // dd($this->assign_cab_id);
    //     foreach ($this->assign_cab_id as $cab_id) {
    //         DivisionWiseCab::create([
    //             'division_id' => $this->selectedDivision,
    //             'seasion_type_id' => $this->assign_season_type,
    //             'cab_id' => $cab_id,
    //         ]);
    //     }

    //     // $this->reset(['assign_cab_id', 'assign_season_type']);
    //     // Optionally, send feedback
    //     session()->flash('success', 'Data submitted successfully!');
    //     $this->division_wise_cabs  = $this->GetCab();
    //     $this->active_assign_new_modal = 0;
    //     $this->selected_season_type = $this->assign_season_type;
    // }

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
