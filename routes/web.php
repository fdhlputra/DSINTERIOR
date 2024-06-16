<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/PortofolioPage', function () {
    return view('PortofolioPage');
});