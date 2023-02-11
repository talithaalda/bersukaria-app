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

Route::get('/', function () {
    return view('index',[
        "active"=>'beranda',
        "title"=>'Bersukaria Indonesia - Tour Organizer'
    ]);
});
Route::get('/article', function () {
    return view('article',[
        "active"=>'article',
        "title"=>'Artikel'
    ]);
});
