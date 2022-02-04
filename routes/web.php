<?php

use App\Http\Controllers\ContactaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Mail\ContactaMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("projects", ProjectController::class);


Route::get('contacta',[ContactaController::class,'index'])->name('contacta.index');
Route::post('contacta',[ContactaController::class,'store'])->name('contacta.store');

/*Route::resource("projects/create", ProjectController::class);


Route::get('/contacto', function () {

    return "Visualizando texto"; });

Route::get('contacto/{id?}', function($id="invitado"){

    return 'Contacto: '.$id;});
    
    Route::resource("emails", ContactaController::class);
*/

