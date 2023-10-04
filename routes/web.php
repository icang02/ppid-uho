<?php

// import all facades
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



// route
Route::get('/tes', function () {
    return Artisan::call('migrate:fresh --seed');
});

Route::get('/', function () {
    return view('home.home');
});

Route::get('/berita', function () {
    return view('home.berita');
});

Route::get('/detail_berita', function () {
    return view('home.detail_berita');
});

Route::get('/informasi-publik', function () {
    return view('home.informasi-publik');
});
