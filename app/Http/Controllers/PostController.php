<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

public function create(){
    return view('create');
}
public function ourTestStorage(Request $request){
    $post= new post;
    $post->name=$request->name;
    $post->description = $request->description;
    $post->image=$request->imageFile;

    $post->save();
    return "Successfully saved data";
}
}
