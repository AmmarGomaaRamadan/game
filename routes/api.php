<?php

use App\Http\Controllers\Api\PlayerController;
use App\Http\Controllers\Api\BuildingController;
use App\Models\player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
 

});*/
//player controller routes
Route::get(uri:'/player',action:[PlayerController::class,'index'])->name('player.index');
Route::get(uri:'/player/{player}',action:[PlayerController::class,'show'])->name('player.show');

//building controller routes
Route::get(uri:'/building',action:[BuildingController::class,'index'])->name('building.index');
Route::get(uri:'/building/{building}',action:[BuildingController::class,'show'])->name('building.show');