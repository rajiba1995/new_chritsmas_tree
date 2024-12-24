<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Lead;
use Auth;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'unique_id' => 'required|string|unique:leads,unique_id|max:255',
    //         'customer_name' => 'required|string|max:255',
    //         'customer_email' => 'required|email|max:255',
    //         'customer_mobile' => 'required|digits:10',
    //         'customer_whatsapp' => 'required|digits:10', 
    //         'travel_location' => 'required|string|max:255',
    //         'travel_duration' => 'required|string|max:255',
    //         'travel_date' => 'required|date', 
    //         'number_of_adults' => 'required|integer|min:1',
    //         'number_of_children' => 'required|integer|min:1',
    //     ]);

    //     $lead = new Lead();
    //     $lead->unique_id = $validated['unique_id'];
    //     $lead->customer_name = $validated['customer_name'];
    //     $lead->customer_email = $validated['customer_email'];
    //     $lead->customer_mobile = $validated['customer_mobile'];
    //     $lead->country_code = '91'; // Static value for now
    //     $lead->customer_whatsapp = $validated['customer_whatsapp'] ?? null;
    //     $lead->travel_location = $validated['travel_location'];
    //     $lead->travel_duration = $validated['travel_duration'];
    //     $lead->travel_date = $validated['travel_date'];
    //     $lead->number_of_adults = $validated['number_of_adults'];
    //     $lead->number_of_children = $validated['number_of_children'];
    //     $lead->number_of_travellor = $validated['number_of_adults'] + $validated['number_of_children'];
    //     $lead->lead_type = $validated['lead_type'];
    //     $lead->lead_source = $validated['lead_source'];
    //     $lead->user_id = $validated['user_id'];

    //     $lead->save();

    //     // Return the created lead as JSON response
    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $lead,
    //         'message' => 'Lead created successfully',
    //     ], 201);
    // }

    public function store(Request $request)
    {
        // dd("hjhjh");
        $validated = $request->validate([
            'unique_id' => 'required|string|unique:leads,unique_id|max:255',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_mobile' => 'required|digits:10',
            'customer_whatsapp' => 'required|digits:10',
            'city_id' => 'required|integer|exists:cities,id', // Validate the city ID
            'travel_duration' => 'required|string|max:255',
            'travel_date' => 'required|date',
            'number_of_adults' => 'required|integer|min:1',
            'number_of_children' => 'required|integer|min:1',
            'lead_type' => 'required|string|max:255',
            'lead_source' => 'required|string|max:255',
            // 'user_id' => 'required|integer|exists:users,id', // Validate user ID
        ]);

        // Get the city name from the cities table
        // $city = City::findOrFail($validated['city_id']);

        // Create the lead
        $lead = new Lead();
        $lead->unique_id = $validated['unique_id'];
        $lead->customer_name = $validated['customer_name'];
        $lead->customer_email = $validated['customer_email'];
        $lead->customer_mobile = $validated['customer_mobile'];
        $lead->country_code = '91'; // Static value for now
        $lead->customer_whatsapp = $validated['customer_whatsapp'];
        $lead->travel_location = $validated['city_id'];
        // $lead->travel_location = $city->id; // Use city name dynamically
        $lead->travel_duration = $validated['travel_duration'];
        $lead->travel_date = $validated['travel_date'];
        $lead->number_of_adults = $validated['number_of_adults'];
        $lead->number_of_children = $validated['number_of_children'];
        $lead->number_of_travellor = $validated['number_of_adults'] + $validated['number_of_children'];
        $lead->lead_type = $validated['lead_type'];
        $lead->lead_source = $validated['lead_source'];
        $lead->user_id =1;

        $lead->save();

        return response()->json([
            'status' => 'success',
            'data' => $lead,
            'message' => 'Lead created successfully',
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }
    public function show(string $id)
    {
        $lead=Lead::where('id',$id)->with('city')->first();
        return response()->json([
            'status' => 'success',
            'data' => $lead,
            'message' => 'Lead details retrieved successfully',
        ], 200);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
