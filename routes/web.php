<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "Hello World";
});

Route::get('/index',function(){
    return "<h1>This is Index page";
});