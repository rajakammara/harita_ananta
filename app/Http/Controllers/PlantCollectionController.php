<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlantCollection as ResourcesPlantCollection;
use App\Models\PlantCollection;
use Illuminate\Http\Request;

class PlantCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantCollection = \App\Models\PlantCollection::with(['user'])->paginate();
        return view('plants.index', compact('plantCollection'));
    }

    public function plantcollection_mandal_village($mandal, $village)
    {
        $plantCollection = \App\Models\PlantCollection::with(['user'])->where('mandal', '=', $mandal)->where('village', '=', $village)->paginate();
        return view('plants.index', compact('plantCollection'));
    }

    public function export_to_csv()
    {
        //return response("working");
        try {
            $filename = 'plant-collection.csv';
            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => "attachment; filename=\"$filename\"",
                'Pragma' => 'no-cache',
                'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
                'Expires' => '0',
            ];




            return response()->stream(function () {
                $columns = array(
                    'Mandal',
                    'Village',
                    'PlantName',
                    'Latitude',
                    'Longitude',
                    'PlantedOn'
                );
                $handle = fopen('php://output', 'w');
                PlantCollection::chunk(25, function ($plants) use ($columns, $handle) {

                    fputcsv($handle, $columns);
                    foreach ($plants as $plant) {
                        $data = [
                            isset($plant->mandal) ? $plant->mandal : '',
                            isset($plant->village) ? $plant->village : '',
                            isset($plant->plant_name) ? $plant->plant_name : '',
                            isset($plant->latitude) ? $plant->latitude : '',
                            isset($plant->longitude) ? $plant->longitude : '',
                            isset($plant->created_at) ? $plant->created_at : '',

                        ];
                        fputcsv($handle, $data);
                    }
                    fclose($handle);
                });
            }, 200, $headers);
        } catch (\Throwable $th) {
            return response($th->getMessage());
        }
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
        //return $request->all();

        try {
            if (auth('sanctum')->check()) {
                $userid = auth('sanctum')->user()->id;
                $request->validate([
                    //"user_id" => "required",
                    "plant_name" => "required",
                    "latitude" => "required",
                    "longitude" => "required",
                    //"photo" => "required|image|max:1000",
                ], [
                    // "user_id.required" => "Please Insert Userid",
                    "plant_name.required" => "Please enter Plant Name",
                    "latitude.required" => "Please Insert Latitude",
                    "longitude.required" => "Please Longitude",
                    //"photo.required" => "Please Insert Photo",
                ]);
                if ($request->hasFile("photo")) {
                    // Get filename with the extension
                    $filenameWithExt = $request->file('photo')->getClientOriginalName();
                    // Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $request->file('photo')->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    // Upload Image
                    $path = $request->file('photo')->storeAs('public/images/plantcollection', $fileNameToStore);
                } else {
                    $fileNameToStore = "Testing.jpg";
                }

                // Create New Plant Collection
                $plantCollection = new PlantCollection();
                $plantCollection->user_id = $userid;
                $plantCollection->plant_name = $request->get('plant_name');
                $plantCollection->latitude = $request->get('latitude');
                $plantCollection->longitude = $request->get('longitude');
                $plantCollection->mandal = $request->get('mandal');
                $plantCollection->village = $request->get('village');
                $plantCollection->photo = $fileNameToStore;
                $plantCollection->save();
                return response()->json(['status' => "success", 'message' => "Plant Collection Added Successfully!"], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'fail',
                'message' => $th->getMessage(),
            ], 502);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlantCollection  $plantCollection
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $plantCollection_id = $request->plant_collection_id;

        return new ResourcesPlantCollection(PlantCollection::where('id', $plantCollection_id)->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlantCollection  $plantCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(PlantCollection $plantCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlantCollection  $plantCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlantCollection $plantCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlantCollection  $plantCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlantCollection $plantCollection)
    {
        //
    }
}
