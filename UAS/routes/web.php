<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', App\Livewire\Idx::class)->name('idx');
Route::get('/create', App\Livewire\Create\Idx::class)->name('create');
Route::get('/read', App\Livewire\Read\Idx::class)->name('read');
Route::get('/edit/{id}', App\Livewire\Edit\Idx::class)->name('edit');