<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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
    return view('pages.home');
});

Route::get('/tentangkami', function () {
    return view('pages.tentangkami');
});

Route::get('/layanankami', function () {
    return view('pages.layanankami');
});

Route::get('/artikelkami', function () {
    return view('pages.artikelkami');
});

Route::get('/hubungikami', function () {
    return view('pages.hubungikami');
});
