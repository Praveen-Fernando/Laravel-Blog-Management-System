<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AllPostview extends Controller
{
   public function Viewallposts(){

       $Posts = Post::all();

       return view('welcome', compact('Posts'));
   }
}
