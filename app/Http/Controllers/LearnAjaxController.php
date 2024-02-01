<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class LearnAjaxController extends Controller
{
    public function view(){
        // return view("learnAjax.create");
        $author = Author::get();

        if($author){

            // return response()->json(['success' => true, 'message' => $author]);
            echo json_encode(['success' => true, 'message' => $author]);
           }else{
            return response()->json(['success' => false, 'message' => 'Subject Failed successfully']);
           }

    }
    public function store(Request $request){
        // dd ($request->all());
        $author = new Author();
        $author->name = $request->name;
        $author->username = $request->username;
        $author->age = $request->age;

        // echo "i am here";
        if($author->save()){

            return response()->json(['success' => true, 'message' => 'Subject created successfully']);
           }else{
            return response()->json(['success' => false, 'message' => 'Subject Failed successfully']);
           }

    }

    public function retreive(){
        // $author = Author::get();
        // return view('learnAjax.retreive');
        $author = Author::get();
        if($author){
            return response()->json(['success' => true, 'message' => $author]);
         }
        else{
            return response()->json(['success' => false, 'message' => 'Subject Failed successfully']);
           }
    }
}
