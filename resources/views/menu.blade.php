@extends('layouts.app')
    @section('content')  

    @php
        use App\Models\User;
        use App\Models\Post;
        use Illuminate\Support\Facades\DB;
        use App\Http\Controllers\Controller;


    @endphp
           


        <div style="font-size: 150%;"><b><u>{{$menu}}</u></b></div> 
                        @if(count($posts)>=1)
                            @foreach($posts as $post)
                                    <!--POST-->
                                    <div class="post-container border-center">
                                                <div class="post w3-white w3-round-large">
                                                        <a href="/posts/{{$post->id}}" class="post-link">
                                                        <i class=" ">**<b>{{$post->title}}**
                                                            @php 
                                                                $usersinfo = DB::table('users')->where('id','=',$post->user_id)->get();

                                                                foreach($usersinfo as $usersinfos){
                                                                };
 
                                                            @endphp
                                                        <div class="  w3-text-grey">by <b><a href="/{{$usersinfos->name}}/{{$usersinfos->id}}/profile"> 
                                                            {{$usersinfos->name}}</a></b></div>
                                                        
                                                </div>
                                    </div>
                            @endforeach
                        @endif
                                    <!--PAGINATION-->
                                    <div class="w3-container">
                                                <div class=" ">
                                                            <a class="">(1)</a> 
                                                            <a class="">(2)</a> 
                                                            <a class="">(3)</a> 
                                                            <a class="">(4)</a> 
                                                            <a class="">(5)</a> 
                                                            <a class="">(6)</a> 
                                                            <a class="">(7)</a> 
                                                            <a class="">(8)</a> 
                                                            <a class="">(9)</a> 
                                                            <!--<a class="">(10)</a>-->...
                                                            <a class="">(100)</a> 
                                                            <br />
                                                            
                                                            (<a href="/posts/create" class="" id="create-post">Create New Topic</a>) 
                                                            <!--(<a class="">Follow</a>) -->
                                                            (<a class="">Mail Mod</a>) 
                                                            
                                                </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
    @endsection