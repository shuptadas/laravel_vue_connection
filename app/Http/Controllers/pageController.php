<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showHome(){
        // return "<h1>Welcome to controller lecture</h1>";
        return view("welcome");
    }
    public function showUser(string $id){
        // return "<h1>Welcome to controller lecture</h1>";
        // return view("user",['id'=> $id]);
        return view("user",compact("id"));
    }
    public function showBlog(){
        // return "<h1>Welcome to controller lecture</h1>";
        return view("blog");
    }
}
