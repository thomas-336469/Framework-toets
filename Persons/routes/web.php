<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonsController;


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

Route::get('/person', [PersonsController::class, 'index'])->name('persons.index');
Route::get('/person/create', [PersonsController::class, 'create'])->name('persons.create');
Route::post('/person', [PersonsController::class, 'store'])->name('persons.store');
Route::get('/person/{person}/edit', [PersonsController::class, 'edit'])->name('persons.edit');
Route::put('/person/{person}/update', [PersonsController::class, 'update'])->name('persons.update');
Route::delete('/person/{person}/destroy', [PersonsController::class, 'destroy'])->name('persons.destroy');
