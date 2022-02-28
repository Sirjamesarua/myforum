@extends('layouts.app')

@section('content')
    @php
        use App\Http\Controllers\HomeController;
        use App\Http\Controllers\PostsController;
        use App\Http\Controllers\ProfilepixController;
    @endphp             
 

            <!--SIGNED IN PROFILE-->
            <div class="profilepage-container border-center">
                        <div class="profilepage w3-center w3-text-grey">
                        
                                        
                                    <br />
                                    <!--PROFILE PIC-->
                                    <div class="w3-center">
                                                <img src="/storage/profilepix/{{ Auth::user()->image }}" class="w3-circle w3-border profilepix" style="" id=""></img>
                                    </div>
                                                <b><i class="">{{ Auth::user()->name }}</i></b>
                                    <br />
                                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><b><i> {{ __('Logout') }}</i></b></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                            </form>
                                    <br />
                                    <br />
                                    <br />
                                    
                                    
                                    <form action="{{action('App\Http\Controllers\HomeController@changepix')}}" method="POST" style="" enctype="multipart/Form-data">
                                    {{method_field('POST')}}
                                    @csrf
                                
                                                    <div class=""><b><i>
                                        <input type="file" name="image" class="w3-border w3-text-white"></input><input type="submit" value="Change Profile Pic" class="w3-text-blue w3-round"></input></i></b></div>

                                    </form>
                                                                <div class="w3-border-small" id="signedin-line"></div>
                                                    <div class=""><a href="/mytopics"><b><i>My Topics</i></b></a></div>
                                                                <div class="w3-border-small" id="signedin-line"></div>
                                                    <div class=""><a href="#"><b><i>My Posts</i></b></a></div>
                                                                <div class="w3-border-small" id="signedin-line"></div>
                                                    <div class=""><a href="#"><b><i>Mentions<i class="w3-text-red">(4)</i></i></b></a></div>
                                                                <div class="w3-border-small" id="signedin-line"></div>
                                                    <div class=""><a href="#"><b><i>Followed Topics</i></b></a></div>
                                                                <div class="w3-border-small" id="signedin-line"></div>
                                                    <br />
                                                    
                                                    
                                                    <b><i class=" ">Time Registered :</i></b>
                                                    <i class="">{{ Auth::user()->created_at }}</i>
                                                    <br />
                                                    
                                                    <b><i class=" ">Signature :</i></b>
                                                    <br />
                                                    <i class="">{{ Auth::user()->signature }}</i>
                                                    <br /><a href="#">change</a><br />
                                                    
                                                    <b><i class=" ">Location :</i></b>
                                                    <i class="">{{ Auth::user()->location }}</i>
                                                    <br />
                                                    <br />
                                                    
                                                    
                                                    
                                                    <!--FOLLOWING-->
                                                    <b><i class=" ">FOLLOWING(4) :</i></b>
                                                    <br />
                                                    <i class=" ">(
                                                    <a href="#">switgal</a>, 
                                                    <a href="#">love</a>, 
                                                    <a href="#">angel</a>, 
                                                    <a href="#">john</a>
                                                    )</i>
                                                    
@endsection
