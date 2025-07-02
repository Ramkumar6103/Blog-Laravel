<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     //return "Hello World";
// });

// Route::get('/index',function(){
//     return "<h1>This is Index page";
// });

Route::get('/',[PostController::class,'index']);
// Route::get('/',function(){
//     return view('index');
// });
Route::get('/post/{id}',[PostController::class,'post'])->where('id','[0-9]+');
Route::get('/old-url',[PostController::class,'oldUrl']);
Route::get('/newest-url',[PostController::class,'newUrl'])->name('new_url');