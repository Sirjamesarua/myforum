<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class CommentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'content'=>'required',
        ]);
 

        $id=$request->input('post_id');
            $comment = new Comment;
            $comment->content=$request->input('content');
            $comment->Authur_id=auth()->user()->id;
            $comment->Post_id=$id;
            $comment->save();

        $comment= DB::table('comments')->where('Post_id',$id)->get();
        $post=Post::find($id);
        return view('posts.show')->with('comment',$comment)->with('post',$post);
    }
}
