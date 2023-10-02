<?php

// import all facades
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



// route
Route::get('/tes', function () {
    return Artisan::call('migrate:fresh --seed');
});

Route::get('/', function () {
    return view('home');
});
