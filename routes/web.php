<?php

use App\Livewire\TopTenList;
use App\Livewire\BooklistComponent;
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

Route::get('/', BooklistComponent::class);
Route::get('/top-ten-list', TopTenList::class);
