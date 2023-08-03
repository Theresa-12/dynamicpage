<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\title;
use App\Http\Controllers\about;
use App\Http\Controllers\projectsandoutcome;
use App\Http\Controllers\photos;

 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/frontpage',[title::class,'bigtitle']);
Route::get('/about',[about::class,'details']);
Route::get('/details',[projectsandoutcome::class,'projects']);

