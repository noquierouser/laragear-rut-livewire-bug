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

Route::get('/', App\Http\Livewire\Socios\Index::class)->name('socios.index');
Route::get('/agregar', App\Http\Livewire\Socios\Create::class)->name('socios.create');
Route::get('/{socio}/editar', App\Http\Livewire\Socios\Create::class)->name('socios.edit');