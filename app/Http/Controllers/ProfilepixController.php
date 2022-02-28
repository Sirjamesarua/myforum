<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilepixController extends Controller
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

    }

}
