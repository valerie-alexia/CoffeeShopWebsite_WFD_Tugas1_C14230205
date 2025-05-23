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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Home');
})->name('Home');
Route::get('/catalog', function () {
    return view('Catalog'); 
})->name('Catalog');

Route::get('/contact', function () {
    return view('Contact');
})->name('Contact');
