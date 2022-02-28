@extends('layouts.app')
    @section('content')
    @php
        use App\Models\User;
        use App\Models\Post;
        use App\Models\Comment;
        use Illuminate\Support\Facades\DB;
        use App\Http\Controllers\Controller;
        use App\Http\Controllers\HomeController;
        use App\Http\Controllers\PostsController;
        use App\Http\Controllers\CommentsController;


    @endphp             

            @php 
                $usersinfo = DB::table('users')->where('id','=',$post->user_id)->get();

                foreach($usersinfo as $usersinfos){
                };

            @endphp

            <!--VIEWED POST-->
            <div class="viewedpost-container">


                    <!-- MAIN POST-->
                <div class="viewedpost border-center">
                    <div class="mainpost w3-white w3-round-large w3-center">
                        <!--TITLE -->
                        <br />
                        <b class="viewedpost-title" style="font-size: 200%;">{{$post->title}}</b>
                        <br /><b class="">Author:<a href="/{{$usersinfos->name}}/{{$usersinfos->id}}/profile"> {{$usersinfos->name}}</a></b>
                        <!--POSTIMAGE -->
                        <br />
                        <hr />
                        <div class="border-center">
                            <div class="w3-border" style="">

                                                @php
                                                    $imagestring=$post->image;
                                                    $imagepath=explode(" ",$imagestring);
                                                @endphp
                                                @foreach($imagepath as $path)
                                                    <img class='' src='/storage/{{$path}}' alt="web developer" style="height:300px; max-width:65%; padding:1px;"></img>
                                                @endforeach

                            </div>
                        </div>
                        <br />
                        <!--BODY -->
                        <div class="border-center">
                        <div class="viewedpost-body" style="width:80%;font-size:120%;">
                            <i class="">{{$post->body}}</i>
                        </div>
                        </div>
                        <br />


                    <!-- COMMENT-->
                    <div class="w3-center">
                        <div class="w3-text-white" style="font-size:200%;background-color:#0C1730;"><b>COMMENTS</b></div>

                        @php

                            $comments = DB::table('comments')->where('Post_id','=',$post->id)->get();

                        @endphp

                            @if(count($comments)>=1)
                            @foreach($comments as $comment)
                                    @php
                                        $commentauthurs = DB::table('users')->where('id','=',$comment->Authur_id)->get();

                                        foreach($commentauthurs as $commentauthur){
                                        };
                                    @endphp

                                    <a href="/{{$commentauthur->name}}/{{$commentauthur->id}}/profile"><b class="">{{$commentauthur->name}}</b></a>:
                                    <br />
                                    <!--COMMENTBODY -->
                                    <div class="border-center">
                                    <div class="comment-body" style="width:80%;font-size:100%;text-align:left;">
                                        <span class="">{{$comment->content}}</span>
                                    </div>
                                    </div>
                                    <hr />
                                    <hr />

                            @endforeach
                            @endif


                        <a href="#"><b class="">james</b></a>:
                        <br />
                        <!--COMMENTBODY -->
                        <div class="border-center">
                        <div class="comment-body" style="width:80%;font-size:100%;text-align:left;">
                            <span class="">gdghfd dytyvh fhv hjfgdg gdfc kuyub hgdeqv iutgv hdcgb itfrwdfv ggftyt fgdtdvv hftdty  iutf kjgvy i am     akgvy bgdc bvf      ujhjh g i ama gi t dvnvh hftire tdduhjhvg gchbgdghfd dytyvh fhv hjfgdg gdfc kuy</span>
                        </div>
                        </div>
                        <hr />
                        <hr />

                        <a href="#"><b class="">james</b></a>:
                        <br />
                        <!--COMMENTBODY -->
                        <div class="border-center">
                        <div class="comment-body" style="width:80%;font-size:120%;text-align:left;">
                            <span class="">gdghfd dytyvh fhv hjfgdg gdfc kuyub hgdeqv iutgv hdcgb itfrwdfv ggftyt fgdtdvv hftdty  iutf kjgvy i am     akgvy bgdc bvf      ujhjh g i ama gi t dvnvh hftire tdduhjhvg gchbgdghfd dytyvh fhv hjfgdg gdfc kuy</span>
                        </div>
                        </div>
                        <hr />
                        <hr />
                        <a href="#"><b class="">james</b></a>:

                        <br />
                        <!--COMMENTBODY -->
                        <div class="border-center">
                        <div class="comment-body" style="width:80%;font-size:120%;text-align:left;">
                            <span class="">gdghfd dytyvh fhv hjfgdg gdfc kuyub hgdeqv iutgv hdcgb itfrwdfv ggftyt fgdtdvv hftdty  iutf kjgvy i am     akgvy bgdc bvf      ujhjh g i ama gi t dvnvh hftire tdduhjhvg gchbgdghfd dytyvh fhv hjfgdg gdfc kuy</span>
                        </div>
                        </div>
                        <hr />
                        <hr />
                    </div>
                    <!-- -->

                    <!--REPLY FORM-->
                    <div class="">
                        <form action="{{action('App\Http\Controllers\CommentsController@create')}}" method="POST" style="" enctype="multipart/Form-data">
                            {{method_field('POST')}}
                            @csrf
                                
                            <i><b class="w3-text-red" style="width:125%">REPLY POST:</b></i><br />
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="text" name="content" style="width:80%;">
                            <input type="submit" name="" value="SEND" class="w3-text-blue">
                        </form>
                    </div>
                    <br />




                    </div>
                </div>

                    
            </div>
            <br />



                           </div>
                                    
    @endsection