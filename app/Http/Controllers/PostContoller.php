<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Dotenv\Validator;
use Illuminate\Http\Request;

class PostContoller extends Controller
{
    public function insert(request $request){

        $validate = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($validate->fails()){
            return back()->with('status','Something went Wrong');
        }else {
            Post::create([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description
            ]);
        }
        return redirect(route('post.all'))->with('status','Post Created Successfully');
    }


    public function postView($postID){

        $Post = Post::findOrFail($postID);

        return view('Post.postview',compact('Post'));
    }

    public function edit($postID){

        $Post = Post::findOrFail($postID);

        return view('Post.update',compact('Post'));
    }

    public function update($postID, Request $request){
        Post::findOrFail($postID)->update($request->all());

        return redirect(route('home'));
    }

    public function delete($postID){
        Post::findorfail($postID)->delete();

        return back();
    }
}
