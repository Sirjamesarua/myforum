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


class OthersProfileController extends Controller
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
    public function index($name,$id)
    {
    	$othersprofile=User::find($id);
        $user_id= auth()->user()->id;

        if($id==$user_id){
            $user= User::find($user_id);
            return view('home')->with('posts',$user->posts);
        }else{

            return view('othersprofile.othersprofile')->with('othersprofile',$othersprofile);
    	//$othersprofile=User::find($id);
        //return view('othersprofile.othersprofile')->with('id',$id);
        }
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function otherstopics($name,$id)
    {
        $posts= DB::table('Posts')->where('user_id',$id)->get();
        return view('othersprofile.otherstopic')->with('posts',$posts);
    }
    
}
