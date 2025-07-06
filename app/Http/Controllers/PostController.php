<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = "Ramkumar";
        $posts = json_decode(json_encode([
            // ['title' => 'Post 1', 'content'=> ' Content of post 1'],
            // ['title' => 'Post 2', 'content'=> ' Content of post 2']
        ]));
        // return view('index',compact('title'));
        return view('index',compact('posts'));
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

    public function detail(){
        return view('detail');
    }
}
