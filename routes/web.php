<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Navbar;
use App\Livewire\ShowPost;

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
})->name('welcome');

// Route::get('/navbar',Navbar::class);
Route::get('/post',ShowPost::class);

