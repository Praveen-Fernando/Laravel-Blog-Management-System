<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostContoller extends Controller
{
    public function insert(request $request){
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return back();
    }


    public function postView($postID){

        $Post = Post::findOrFail($postID);

        return view('Post.postview',compact('Post'));
    }
}
