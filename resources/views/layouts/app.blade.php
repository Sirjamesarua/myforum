<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd"> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="./js/script1.js"></script>
    <link rel="stylesheet" href="{{asset('css/w3.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="https://font.googleapis.com/css?family=Roboto"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link>
        <meta name="viewport"  content="width=device-width, initial-scale=1.0"></meta>
    
        <style>
                body{
                    background-color:#DFDFDF;
                    font-family:serif;
                    color:#0C1730;
                    box-sizing: border-box;
                    font-size:100%;
                }
                
                /*MY STYLE*/
                .border-center{
                    display:flex;
                    justify-content:center;
                }
                
                .xlarge{
                    font-size:150%;
                }
                
                /*HEADER*/
                .header{
                    color:#0C1730;
                    font-family:'Roboto',san-sherif;
                }
                
                .forum-name{
                    /*font-size:250%;*/
                    margin:1%;
                }
        
                .profile{
                    margin:1%;
                }
                
                
                /*SUBHEADING*/
                .subheader-container{
                    background-color:#0C1730;
                }
                
                .subheader-container.a:active{
                    color:white;
                    text-decoration: underline;
                }
                
                
                #largemenu{
                    display:none;
                }
                
                
                #menu{
                    overflow:hidden;
                    display:none;
                    padding:5x;
                }
                
                .topbottompadding{
                    padding-top:8px;
                    padding-bottom:8px;
                }
                
                @media screen and (orientation:landscape){
                    #smallmenu{
                        display:none;
                    }
                    
                    #largemenu{
                            display:block;
                    }
                    
                }
                
                
                
                /*MAIN*/
                .main-container{
                    background-color:#DFDFDF;
                    padding-top:35px;
                }

                @media screen and (orientation:landscape){
                    .main-container{
                        font-size:135%;
                    }

                    .footer-container{
                        font-size:235%;
                    }
                    
                }
                
                /*BANNER*/
                .banner-container{
                    display:flex;
                    justify-content:center;
                    margin-bottom:10px;
                }
                
                .banner{
                    height:120px;
                    width:75%;
                    background-color:white;
                }
                
                /*POST*/
                .post-container{
                    margin:7px 15px;
                }
                
                .post{
                    width:98%;
                    padding:6px 1px;
                }
                
                .post-link{
                    color:#0C1730;
                    text-decoration:none;
                }
                
                /*BANNER2*/
                .banner2{
                    height:120px;
                    background-color:white;
                }
                
                /*FOOTER*/
                .footer-container{
                    font-size:14px;
                    color:#DFDFDF;
                    background-color:#0C1730
                }

                @media screen and (orientation:landscape){
                    .footer-container{
                        font-size:125%;
                    }

                    .profile-footer{
                        /*font-size:125%;*/
                    }
                    
                }
                
                
                
                /*PROFILE PAGE*/
                .profilepage-container{
                    background-color:#0C1730;
                    color:#DFDFDF;
                }

                @media screen and (orientation:landscape){
                    .profile ,.profilepage-container{
                        /*font-size:115%;*/
                    }

                }
                
                .profilepage{
                    width:95%;
                }
                
                @media screen and (orientation:landscape){
                    .profilemenu, .adminmenu{
                        /*font-size:115%;*/
                    }
                }
                

                .signedin-line{
                    width:60%;
                }
                
                .fa.fa-user{
                    height:440px;
                }
                
                    .profilepix{
                        width: 100px;
                        height: 180px;
                    }

                @media screen and (orientation:landscape){
                    .profilepix{
                        width: 14%;
                        height: 230px;
                    }

                }

                
                /*LOGIN PAGE*/
                .login-container{
                    background-color:#0C1730;
                    color:#DFDFDF;
                }
                
                .login{
                    color:#0C1730;
                    width:90%;
                }
                
                @media screen and (orientation:landscape){
                    .login{
                        font-size:105%;
                    }

                }
                
                .loginform{
                    font-weight:bold;
                    font-family:serif;
                    background-color:#0C1730;
                    color:grey;
                    width:200px;
                }

                @media screen and (orientation:landscape){
                    .form-input{
                        width:30%;
                    }
                }
                
                
                
                
                #ee{
                    display:block;
                    height:250px;
                    color:red;
                }
                
                @media screen and (orientation:landscape){
                    #ee{
                        color:blue;
                    }
                }
                
                
                
        </style>
</head>
<body>

            <div class="w3-top w3-white">
            <!--HEADER-->
            <div class="header-container">
                    <div class="header w3-row">
                    
                                <!--FORUM NAME-->
                                <div class="forum-name w3-col w3-xxlarge" style="width:70%;">
                                        <a href="{{url('/')}}" style="text-decoration: none;color:#0C1730;"><b><i class="">@php echo strtoupper(config('app.name')) @endphp</i></b></a>
                                </div>


 <!-- Authentication Links -->
                        @guest
                        @else
                                <!--PROFILE-->
                                <div class="profile w3-center w3-col" style="width:25%;">
                                    <a href="/profile" style="text-decoration: none;">
                                            <i class="fa fa-user-circle fa-2x" style="color:#0C1730;"></i><br /><b><i class=""> {{ Auth::user()->name }}</i></b>
                                    </a>
</i></b>
                                </div>
                        @endguest




                    
                    </div>
            </div>
            
            <!--SUB HEADER-->
            <div class="subheader-container w3-padding">
                    <div id="smallmenu" class="subheader w3-row">
                                <div class="w3-text-grey w3-large w3-col" style="width:90%;"><b><i>General</i></b></div>
                             <div class="w3-text-grey w3-large w3-col" style="width:10%; display:block;" id="openmenu"><a href="javascript:void(0);" onclick="openmenu()"><i class="fa fa-bars" style="color:grey;"></i></a></div>
                                <div class="w3-text-grey w3-large w3-col" style="width:10%; display:none;" id="closemenu"><a href="javascript:void(0);" onclick="closemenu()"><i class="fa fa-arrow-circle-up" style="color:grey;"></i></a></div>
                    </div>          
                    
                    
                    
                                <div id="largemenu" class="largemenu-container w3-row">
                                            <div class="w3-text-grey   w3-col" style="width:20%;"><a href="/" class="w3-text-grey"><b><i>General</i></b></a></div>
                                            <div class="w3-text-grey   w3-col" style="width:20%;"><a href="/Education/menu" class="w3-text-grey"><b><i>Education</i></b></a></div>
                                            <div class="w3-text-grey   w3-col" style="width:20%;"><a href="/Business/menu" class="w3-text-grey"><b><i>Business</i></b></a></div>
                                            <div class="w3-text-grey   w3-col" style="width:20%;"><a href="/Health/menu" class="w3-text-grey"><b><i>Health</i></b></a></div>
                                            <div class="w3-text-grey   w3-col" style="width:20%;"><a href="/others/menu" class="w3-text-grey"><b><i>Others</i></b></a></div>
                                </div>
                    
                    
                                
                                <div class="" id="menu">
                                <br />
                                        
                                        <div class="w3-border-small" id="menu-line"></div>
                                        
                                        <div class="w3-text-grey w3-large  topbottompadding" style="width:90%;"><a href="/Education/menu" class="w3-text-grey"><b><i>Education</i></b></a></div>
                                        
                                        <div class="w3-border-small" id="menu-line"></div>
                                        
                                        <div class="w3-text-grey  w3-large topbottompadding" style="width:90%;"><a href="/Business/menu" class="w3-text-grey"><b><i>Business</i></b></a></div>
                                        
                                        <div class="w3-border-small" id="menu-line"></div>
                                        
                                        <div class="w3-text-grey  w3-large topbottompadding" style="width:90%;"><a href="/Health/menu" class="w3-text-grey"><b><i>Health</i></b></a></div>
                                        
                                        <div class="w3-border-small" id="menu-line"></div>
                                        
                                        <div class="w3-text-grey  w3-large topbottompadding" style="width:90%;"><a href="/others/menu" class="w3-text-grey"><b><i>Others</i></b></a></div>
                                        
                                        
                                        <br />
                                </div>
            </div>
            <!-- -->
            </div>
            
            
            
            <br />
            <br />
            <br />
            <br />



            <!--MAIN-->
            <!--<script>
                var media=window.matchMedia("(orientation:landscape)");
                
                function mediaquery(e){
                        if(e.matches){
                            
                        }
                };
                        media.addListener(mediaquery);
                        mediaquery(media);
            
            
            </script>-->
            <!--BODY-->
            <!--MAIN PAGE-->
            <div class="main-container">
                        <div class="main w3-center">
                        
                                    <!--BANNER-->
                                    <div class="banner-container">
                                                <div class="banner">
                                                            <b><i class="">PLACE YOUR ADS HERE</i></b>
                                                </div>
                                    </div>
                                    
                                    
                                    <!--CREATE ADS LINK-->
                                    <a class=" ">(Create Advert)</a>
                                    
                                    
                                    <!--POST-->
                                    @yield('content')
                                    
                                    
                                               
                                    <hr />
                                    <!--BANNER2-->
                                    <div class="banner2-container w3-center">
                                            <div class="banner2">
                                                    <b class=" ">PLACE ADVERT HERE</b>
                                            </div>
                                    </div>
                                    
                                    
                                    
                                    <hr />
                                        
                                    
                        </div>
            </div>
            
            
            
            
                                    <!--FOOTER PAGE-->
                                    <div class="w3-container w3-center footer-container">
                                        <b>Members Online :</b>
                                        <br />
                                        <i>(<b>593 Members </b>and <b>95985 Guests </b> online in last 5minutes!)</i>
                                        <br />
                                        <b>stats :</b>
                                        <br />
                                        <i>2,433,455 members</i>
                                        
                                        <hr />
                                        <!--<br />
                                        (<b>Go Up</b>)
                                        <br />
                                        <hr />-->
                                        
                                        <form method="">
                                                <input type="text" name="search" required></input>
                                                <input type="submit" value="Search"></input>
                                        </form>
                                        <b>{{config('app.name')}} -</b> Copyright&copy@php echo "20".date('y'); @endphp.
                                        <br />
                                        <i>All right reserved. <b>See How To Advertise</b></i>
                                        <br />
                                        <i><b>Disclaimer :</b>Every Forum member is solely responsibe
                                        for anything he/she posts or upload on {{config('app.name')}}.</i>
                                        <hr />
                                        &copy {{config('app.name')}} @php echo "20".date('y'); @endphp
                                        <br />
                                    </div>
                                    
                                    
                                    
                                
            <script>
                        
                            var x=document.getElementById("menu");
                            var y=document.getElementById("openmenu");
                            var z=document.getElementById("closemenu");
            
            
                        function openmenu(){
                                x.style.display="block";
                                y.style.display="none";
                                z.style.display="block";
                        }
                        
                        function closemenu(){
                                x.style.display="none";
                                y.style.display="block";
                                z.style.display="none";
                        }

                        //CREATE POST
                        document.getElementById('create-post').addEventListener('click',createpost);
                        function createpost(){
                            //var xhr=new XMLHttpRequest();
                        }

            </script>
                
        
        
</body>
</html>