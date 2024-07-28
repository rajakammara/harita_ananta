<?php

namespace App\Http\Controllers;

use App\Models\PlantsMaster;
use Illuminate\Http\Request;

class PlantsMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['plants'] = PlantsMaster::all();
        return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlantsMaster  $plantsMaster
     * @return \Illuminate\Http\Response
     */
    public function show(PlantsMaster $plantsMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlantsMaster  $plantsMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(PlantsMaster $plantsMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlantsMaster  $plantsMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlantsMaster $plantsMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlantsMaster  $plantsMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlantsMaster $plantsMaster)
    {
        //
    }
}
