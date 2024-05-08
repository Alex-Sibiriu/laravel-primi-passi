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

Route::get('/', function () {
    $data = [
        'name' => 'Alex',
        'surname' => 'Sibiriu'
    ];

    return view('home', $data);
})->name('home');

Route::get('/introduzione', function () {
    return view('introduction');
})->name('introduction');

Route::get('/news', function () {
    return view('news');
})->name('news');
