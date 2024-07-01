<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlantCollection;
use App\Models\PlantCollection as ModelsPlantCollection;
use Illuminate\Http\Request;

class ApiResponseController extends Controller
{
    //Get All get User Plant Collection
    public function getUserPlantCollection(Request $request)
    {
        $userid = auth('sanctum')->user()->id;
        return new PlantCollection(ModelsPlantCollection::where('user_id', $userid)->get());
    }

    //Get All get All Plant Collection
    public function getAllPlantCollection(Request $request)
    {
        $userid = auth('sanctum')->user()->id;
        return new PlantCollection(ModelsPlantCollection::where('user_id', $userid)->get());
    }
}
