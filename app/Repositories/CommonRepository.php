<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\State;
use App\Models\Division;
use App\Models\Hotel;
use App\Models\SeasionPlan;
use App\Models\Category;
use App\Models\SeasionType;
use App\Models\Ammenity;
use App\Models\RoomCategory;
use Illuminate\Support\Facades\Log;
use Exception;



use Illuminate\Support\Facades\DB;

class CommonRepository
{
    
    // City
    public function getAllCity($limit = 10, $division = '', $destination = '')
    {
        $query = City::orderBy('name', 'ASC');  // Start by ordering the cities
        // dd($division);
        // Apply division filter if provided
        if (!empty($division)) {
            $query->where('name', 'like', "%{$division}%");
        }

        // Apply destination filter if provided
        if (!empty($destination)) {
            $query->where('state_id', $destination);
        }

        // Paginate the results
        return $query->paginate($limit);  // $limit is the number of results per page
    }

    public function getAllActiveCity()
    {
        return City::where('status', 1)->get();
    }
    public function getAllActiveSeasionType()
    {
        return SeasionType::where('status', 1)->get();
    }

    public function createCity(array $data){
        $division = new City;
        $division->name = ucwords($data['name']);
        $division->state_id = ucwords($data['state_id']);
        $division->save();
        return $division;
    }
    public function getCityById($id){
        return City::where('id', $id)->first();
    }
    public function updateCity(array $data){
        $division  = City::findOrFail($data['id']);
        $division->name = ucwords($data['name']);
        $division->state_id = ucwords($data['state_id']);
        $division->save();
        return $division;
    }
    public function deleteCity($id){
        $city = City::findOrFail($id);
        $city->delete();
        return $city;
    }
   
    public function getALlActiveLeadSatus(){
        return DB::table('leads_status')->where('status', 1)->orderBy('position', 'ASC')->get();
    }
    public function getAllState(int $perPage = 15, $state, $limit = 10,)
    {
        $query = State::orderBy('name', 'ASC');
    
        if (!empty($state)) {
            $query->where('name', 'like', "%{$state}%");
        }
        
        $paginatedStates = $query->paginate($perPage);
        
        $totalRecords = $query->count();

        return [
            'states' => $paginatedStates,  // Paginated states
            'totalRecords' => $totalRecords,  // Total records count
        ];
    }
    public function getAllActiveState()
    {
        return State::where('status', 1)->orderBy('name', 'ASC')->get();
    }

    public function createState(array $data){
        $state = new State;
        $state->name = ucwords($data['name']);
        $state->save();
        return $state;
    }

    

    public function getStateById($id){
        return State::where('id', $id)->first();
    }
 
    public function updateState(array $data){
        $state  = State::findOrFail($data['id']);
        $state->name = $data['name'];
        $state->save();
        return $state;
    }
    public function deleteState($id){
        $state = State::findOrFail($id);
        $state->delete();
        return $state;
    }
   

    public function getAllDivision(int $perPage = 15)
    {
        return Division::orderBy('name', 'ASC')->paginate($perPage);
    }
    public function getAllActiveDivision()
    {
        return Division::where('status', 1)->get();
    }

    
    
    public function deleteDivision($id){
        $division = Division::findOrFail($id);
        $division->delete();
        return $division;
    }
    // Hotel Seasion Plan
    public function getAllHotelSeasionPlan(){
        return SeasionPlan::orderBy('title', 'ASC')->get();
    }
    public function getAllActiveHotelSeasionPlan(){
        return SeasionPlan::where('status',1)->orderBy('position','ASC')->get();
    }
    
    public function storeHotelSeasionPlan(array $data){
        $sessionPlan  = new SeasionPlan;
        $sessionPlan->title = $data['title'];
        $sessionPlan->plan_item = implode(', ', array_map('strtoupper', $data['plan_item']));
        $sessionPlan->save();
        return $sessionPlan;
    }

    public function updateHotelSeasionPlan(array $data){
        $sessionPlan  = SeasionPlan::findOrFail($data['id']);
        $sessionPlan->title = $data['title'];
        $sessionPlan->plan_item = implode(', ', array_map('strtoupper', $data['plan_item']));
        $sessionPlan->save();
        return $sessionPlan;
    }
    public function getHotelSeasionPlanById($id){
        return SeasionPlan::where('id', $id)->first();
    }
    public function deleteSeasionPlan($id){
        $sessionPlan = SeasionPlan::findOrFail($id);
        $sessionPlan->delete();
        return $sessionPlan;
    }
    
     // Category
     public function getAllCategory(int $perPage = 15)
     {
         return Category::orderBy('name', 'ASC')->paginate($perPage);
     }
     public function getAllActiveCategory()
     {
         return Category::where('status', 1)->get();
     }

     public function createCategory(array $data){
        $category = new Category;
        $category->name = ucwords($data['name']);
        $category->save();
        return $category;
    }

    public function getHotelCategoryById($id){
        return Category::where('id', $id)->first();
    }
    
    public function updateCategory(array $data){
        $category  = Category::findOrFail($data['id']);
        $category->name = $data['name'];
        $category->save();
        return $category;
    }
    public function deleteCategory($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return $category;
    }

    // Ammenity
    public function getAllAmmenity(int $perPage = 15)
    {
        return Ammenity::orderBy('name', 'ASC')->paginate($perPage);
    }
    public function getAllActiveAmmenity()
    {
        return Ammenity::where('status', 1)->get();
    }

    public function createAmmenity(array $data){
       $ammenity = new Ammenity;
       $ammenity->name = ucwords($data['name']);
       $ammenity->save();
       return $ammenity;
   }

    public function getAmmenityById($id){
        return Ammenity::where('id', $id)->first();
    }

    public function updateAmmenity(array $data){
        $ammenity  = Ammenity::findOrFail($data['id']);
        $ammenity->name = $data['name'];
        $ammenity->save();
        return $ammenity;
    }
   public function deleteAmmenity($id){
       $ammenity =Ammenity::findOrFail($id);
       $ammenity->delete();
       return $ammenity;
   }

   // Room category
   public function getAllRoomCategory(int $perPage = 15)
   {
       return RoomCategory::orderBy('name', 'ASC')->paginate($perPage);
   }
   public function getAllActiveRoomCategory()
   {
       return RoomCategory::where('status', 1)->orderBy('name','ASC')->get();
   }

   public function createRoomCategory(array $data){
      $roomCategory = new RoomCategory;
      $roomCategory->name = ucwords($data['name']);
      $roomCategory->save();
      return $roomCategory;
  }

   public function getRoomCategoryById($id){
       return RoomCategory::where('id', $id)->first();
   }

   public function updateRoomCategory(array $data){
    $roomCategory  = RoomCategory::findOrFail($data['id']);
    $roomCategory->name = $data['name'];
    $roomCategory->save();
    return $roomCategory;
    }

    public function deleteRoomCategory($id){
        $roomCategory =RoomCategory::findOrFail($id);
        $roomCategory->delete();
        return $roomCategory;
    }
    
    public function updateOrder($order)
    {
        try {
            foreach ($order as $index => $id) {
                $item = SeasionPlan::find($id);
                if ($item) {
                    $item->update(['position' => $index + 1]);
                } else {
                    return response()->json(['success' => false, 'message' => "Item with ID {$id} not found."], 404);
                }
            }
    
            return response()->json(['success' => true]);
    
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
    

}



