<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/autos',[AutoController::class,'index']);


Route::post('/autos/create',[AutoController::class,'store']);
Route::get('/autos/show/{id}',[AutoController::class,'show']);  

Route::get('/autos/upd/{id}',[AutoController::class,'update']);  

Route::get('/autos/dlt/{id}',[AutoController::class,'destroy']);



