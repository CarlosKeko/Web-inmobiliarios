<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Grupo de rutas para la página web
Route::controller(HomeController::class)->group(function(){
    Route::get('home', "index");
    Route::get('home/registro', "registro");
    Route::get('home/{perfil}', "show");
 
});




