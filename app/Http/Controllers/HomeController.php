<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id= auth()->user()->id;
        $user= User::find($user_id);
        return view('home')->with('posts',$user->posts);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mytopics()
    {
        $user_id= auth()->user()->id;
        $posts= DB::table('Posts')->where('user_id',$user_id)->get();
        return view('myprofile.mytopics')->with('posts',$posts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changepixx(Request $request)
    {
        $this->validate($request,[
            'image'=>'required',
        ]);

        $user_id= auth()->user()->id;
        if($request->hasFile('image')){
            $profilepix=$request->file('image');
            $user= User::find($user_id);

                //get file name with extension
                $filenameWithExt=$profilepix->getClientOriginalName();

                //get just file name
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

                //get just ext
                $extension=$profilepix->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore=$filename.'_'.time().'.'.$extension;

                if(preg_match('/\s/', $fileNameToStore)){
                     $fileNameToStore= preg_replace('/\s/', 
                        '_',$fileNameToStore);
                }

                //upload image
                $path=$profilepix->storeAs('public/profilepix',$fileNameToStore);


            $user->image=$fileNameToStore;
            $user->save();
        }

        return view('home')->with('posts',$user->posts);
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changepix(Request $request)
    {
        $this->validate($request,[
            'image'=>'required',
        ]);

        $user_id= auth()->user()->id;
        $user= User::find($user_id);

        if($request->hasFile('image')){
            $profilepix=$request->file('image');
            $user= User::find($user_id);

                //get just ext
                $extension=$profilepix->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore=$user->name.'.'.$extension;

                if(preg_match('/\s/', $fileNameToStore)){
                     $fileNameToStore= preg_replace('/\s/', 
                        '_',$fileNameToStore);
                }

                //upload image
                $path=$profilepix->storeAs('public/profilepix',$fileNameToStore);


            $user->image=$fileNameToStore;
            $user->save();
        }
        $posts= Post::orderBy('id','desc')->get();

        return view('welcome')->with('posts',$posts);
    }


}
