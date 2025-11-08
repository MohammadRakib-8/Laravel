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

    $validated=$request->validate([
       'name' => 'required|unique:posts',
        'description' => 'required|unique:posts|max:255',
        'imageFile'=> 'nullable|mimes:jpeg,png,jpg',
    ]);


//Uploading image File
$upImageFile=time().'.'.$request->imageFile->extension();
$request->imageFile->move(public_path('images'),$upImageFile);

//Add new post
    $post= new post;
    $post->name=$request->name;
    $post->description = $request->description;
    $post->image=$upImageFile;

    $post->save();
   
    // return "Successfully saved data"; For showing a fixed message after submitting 
       //return redirect()->back();  After Submitting form going back on the form
    //    return redirect()->route('home'); //For redirecting inton a specific route or page
return redirect()->route('home')->with('success','Successfully saved data into database');  //Flash message using session
}

public function editData($id){
$post=post::findOrFail($id);
return view('edit',['ssPost'=>$post]);
}

public function deleteData($id){
$post=post::findOrFail($id);
$post->delete();
flash()->success('Delete Successfull!');
return redirect()->route('home');
;
}

public function updateData($id,Request $request){
    
    $validated=$request->validate([
       'name' => 'required|unique:posts',
        'description' => 'required|unique:posts|max:255',
        'imageFile'=> 'mimes:jpeg,png,jpg',
    ]);


    $post= post::findOrFail($id);
    $post->name=$request->name;
    $post->description = $request->description;
  

    $post->save();
   

    return redirect()->route('home')->with('success','Successfully Updated');

}

}

