<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuildingResource;
use App\Models\building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        //
        $buildings = building::all();
        return BuildingResource::collection($buildings);
        //return response()->json(['players' => $player]);
    }
    public function show($building)
    {
        $targetBuilding = building::find($building);
        if($targetBuilding===null)
        {
            return ['message'=>"This building dose not Exist in the database"];
        }
        return new BuildingResource($targetBuilding);
    }
}
