<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\post;
=======
>>>>>>> 89ddedadc23e743ff53aa5e4e0071da674c9d21a
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
<<<<<<< HEAD

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
=======
>>>>>>> 89ddedadc23e743ff53aa5e4e0071da674c9d21a
}
