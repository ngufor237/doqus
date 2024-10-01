<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class Postcontroller extends Controller
{
    //
    function home(){
        $post=Post::orderBy('created_at', 'desc')
            ->limit(1)
            ->get(); 
        $title=Post::all();
      return view('index',compact('post','title'));
    }

    function index(){
          $post=Post::all();
          $posts=Post::orderBy('created_at', 'desc')
          ->limit(1)
          ->get(); 
        return view('post.postindex',compact('post','posts'));
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

        return redirect('/home');
        
    }

}