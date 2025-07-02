<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index');
    }
    public function post($id){
        return "<h1>Post Page with parameter :".$id."</h1>";
    }
    // public function oldUrl(){
    //     return redirect('/new-url');
    // }
        public function oldUrl(){
        return redirect()->route('new_url');
    }
        public function newUrl(){
        return "<h1>New url</h1>";
    }
}
