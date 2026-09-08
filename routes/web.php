<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio'); // Changed from 'welcome' to 'portfolio'
});
