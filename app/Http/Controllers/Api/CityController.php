<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CommonRepository;

class CityController extends Controller
{

    protected $commonRepository;

    public function __construct(CommonRepository $commonRepository)
    {
        $this->commonRepository = $commonRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeCities = $this->commonRepository->getAllActiveCity();

        if ($activeCities->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'No active cities found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $activeCities,
            'message' => 'Active cities retrieved successfully',
        ], 200);
    
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
