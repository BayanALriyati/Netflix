<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploudImage extends Controller
{
    public function showForm(){
       return view("uploud");
    }

    public function store(Request $request){
        $image = $request->file("photo")->getClientOriginalName();
        $path = $request->file("photo")->storeAs('public/Image',$image);

        return $path;
     }
}
