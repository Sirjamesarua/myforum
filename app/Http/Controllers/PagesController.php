<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PagesController extends Controller
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
    public function index(){
    	return view('welcome');
    }

    public function menu($menu){
        $posts= DB::table('Posts')->where('category',$menu)->get();
        return view('menu')->with('posts',$posts)->with('menu',$menu);

    	//return view('menu');
    }
}
