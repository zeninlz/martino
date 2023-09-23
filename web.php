<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



// dit is de opdracht van 30 september 
Route::get('/', function () {
    return [
        "Uranus",
        "Jupiter",
        "Mars",
        "Aarde",
        "Saturnus",
        "Pluto",
        "Neptunus",
        "Venus"
    ];
});


 //Route::Post ('/register',[UserController::class, 'register']);
//Route::post ('/logout', [UserController::class, 'logout']);
