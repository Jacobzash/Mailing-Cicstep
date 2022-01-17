<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Contactos;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//Rutas Contactos****************************

Route::middleware(['auth:sanctum', 'verified'])->get('/viewcontactos', function () {
    return view('livewire.contactos.view');
})->name('viewcontactos');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('contactos', \App\Http\Livewire\Contactos::class);
    Route::get('/contactos', function(){
        return view('livewire.contactos.index');
    })->name('contactos');
});

Route::view('/bootstrap', 'livewire.vendor.livewire.bootstrap');



//Rutas Grupos****************************

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('grupos', \App\Http\Livewire\Grupos::class);
    Route::get('/grupos', function(){
        return view('livewire.grupos.index');
    })->name('grupos');
});




//Route::middleware(['auth:sanctum', 'verified'])->get('/viewgrupos', function () {
 //   return view('livewire.contactos.viewgrupos');
//})->name('viewgrupos');

//livewire\campanas
//Route::resource(name:'campanas', controller: app\Http\Controllers\CampanasController::class);
//Route::get('campanas', Campanas::class);

//Route Hooks - Do not delete//
	//Route::view('grupos', 'livewire.grupos.index')->middleware('auth');
	//Route::view('contactos', 'livewire.contactos.index')->middleware('auth');
