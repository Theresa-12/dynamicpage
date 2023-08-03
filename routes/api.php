<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\title;
use App\Http\Controllers\about;
use App\Http\Controllers\projectsandoutcome;
use App\Http\Controllers\photos;
use App\Http\Controllers\uploadimage;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/frontpage',[title::class,'bigtitle']);
Route::get('/about',[about::class,'details']);
Route::get('/details',[projectsandoutcome::class,'projects']);
Route::post('/upload',[uploadimage::class,'uploading']);

