<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::view("/tutores", "tutores.index")->name('tutores.index');
//Route::view("/tutores/crear", "tutores.create")->name('tutores.create');
Route::get('/', function () {
    return redirect()->action('TutorController@create');
});
Route::get("/tutores", "TutorController@index")->name('tutores.index');
Route::get("/tutores/crear", "TutorController@create")->name('tutores.create');
Route::post("/tutores", "TutorController@store")->name('tutores.store');
Route::get("/tutores/{tutor}", "TutorController@show")->name('tutores.show');
//Route::post("/tutores", "TutorController@store")->name('tutores.store');
