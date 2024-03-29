<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\ApiProjectController;
use App\Http\Controllers\Api\GuestLeadController;
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

Route::get('/test', function(){
    return response()->json([
        'name' => 'Ilario',
        'surname' => 'Moreni',
    ]);
});


Route::get('projects', [ApiProjectController::class, 'index']);
Route::get('projects/{slug}', [ApiProjectController::class, 'show']);
Route::post('contacts', [GuestLeadController::class, 'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});