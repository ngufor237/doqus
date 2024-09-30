<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class Postcontroller extends Controller
{
    //
    function index(){
          $post=Post::all();
        return view('post.postindex',compact('post'));
    }
    public function createpost(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
           

        ]);
       
        $post=new Post();
        $post->title=$request->title;
        $post->content=$request->description;
        $res=$post->save();
        $post=Post::all();

        return view('index',compact('post'));
        
    }

}