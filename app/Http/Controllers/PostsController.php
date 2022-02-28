<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts= Post::all();
        //$posts= Post::orderBy('id','desc')->get();
        $posts= Post::orderBy('id','desc')->paginate(5);
        //$posts= $posts->paginate(5);
        return view('welcome')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'topic'=>'required',
            'content'=>'required',
            'category'=>'required',

        ]);
 


            $post = new Post;
            $post->title=$request->input('topic');
            $post->body=$request->input('content');
            $post->userId=auth()->user()->id;
            $post->category=$request->input('post-category');
            //$post->category="jjjj";
            //$post->image="kkk";
            $post->user_id=auth()->user()->id;

        if($request->hasFile('images')){
            $filepathArray=array();
            $cover_image=$request->file('images');
            foreach ($cover_image as $cover_images) {
                      
                //get file name with extension
                $filenameWithExt=$cover_images->getClientOriginalName();

                //get just file name
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

                //get just ext
                $extension=$cover_images->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore=$filename.'_'.time().'.'.$extension;

                if(preg_match('/\s/', $fileNameToStore)){
                     $fileNameToStore= preg_replace('/\s/', 
                        '_',$fileNameToStore);
                }

                //upload image
                $path=$cover_images->storeAs('public',$fileNameToStore);

                  $filepathArray[]=$fileNameToStore;
            }

            $post->image=implode(" ",$filepathArray);

            /*//DELETE IMAGE IF DATA IS MISSING IN DATABASE
            if(!isset($post->cover_image,$post->title,$post->body,$post->project_link)){
                foreach($filepathArray as $singlepath){
                    $post_imagepath=public_path().'\storage\cover_images\\'.$singlepath;
                    unlink($post_imagepath); 
                }
            } 

            
*/
            //$post->image=$cover_image;
        }else{
            $post->image="";
        };
        $post->save();

            //return 143;
            //REDIRECTING
        return redirect('/')->with('success','post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        $post=Post::find($id);
        $comment= DB::table('comments')->where('Post_id',$id)->get();

        return view('posts.show')->with('post',$post)->with('comment',$comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
