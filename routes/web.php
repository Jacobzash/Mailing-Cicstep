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
    return view('livewire.home.dashboard');
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

//Route::view('/bootstrap', 'livewire.vendor.livewire.bootstrap');





//Import Contacts*************************
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('importarcsv', \App\Http\Livewire\Importarcsv::class);
    Route::post('importarcsv/importarcsv', '\App\Http\Livewire\Importarcsv@store');
    Route::get('/importarcsv', function(){
        return view('livewire.importarcsv.importarcsv');
    })->name('importarcsv');
});









//Rutas Grupos****************************
Route::middleware(['auth:sanctum', 'verified'])->get('/viewgrupos', function () {
    return view('livewire.grupos.view');
})->name('viewgrupos');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('grupos', \App\Http\Livewire\Grupos::class);
    Route::get('/grupos', function(){
        return view('livewire.grupos.index');
    })->name('grupos');
});








//Calendarrio****************************

Route::middleware(['auth:sanctum', 'verified'])->get('/viewcalendario', function () {
    return view('livewire.calendario.view');
})->name('viewcalendario');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('calendario', \App\Http\Livewire\Calendario::class);
    Route::get('/calendario', function(){
        return view('livewire.calendario.index');
    })->name('calendario');
});







//Campañas****************************

Route::middleware(['auth:sanctum', 'verified'])->get('/viewcampanas', function () {
    return view('livewire.campanas.view');
})->name('viewcampanas');

Route::middleware(['auth:sanctum', 'verified'])->get('/showcampanas', function () {
    return view('livewire.campanas.show');
})->name('showcampanas');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('campanas', \App\Http\Livewire\Campanas::class);
    Route::get('/campanas', function(){
        return view('livewire.campanas.index');
    })->name('campanas');
});







//Metricas****************************



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('metricas', \App\Http\Livewire\Metricas::class);
    Route::get('/metricas', function(){
        return view('livewire.metricas.metricas');
    })->name('metricas');
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
