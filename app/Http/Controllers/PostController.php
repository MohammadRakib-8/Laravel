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
   
    // return "Successfully saved data"; For showing a fixed message after submitting 
       //return redirect()->back();  After Submitting form going back on the form
    //    return redirect()->route('home'); //For redirecting inton a specific route or page
return redirect()->route('home')->with('success','Successfully saved data into database');  //Flash message using session
}
}
