@extends('layouts.app')
    @section('content')  

    @php
        use App\Models\User;
        use App\Models\Post;
        use Illuminate\Support\Facades\DB;
        use App\Http\Controllers\Controller;


    @endphp


			<!--VIEWED PROFILE-->
			<div class="profilepage-container border-center">
						<div class="profilepage w3-center w3-text-grey">
						
										
									<br />
									<!--PROFILE PIC-->
									<div class="w3-center">
												<img src="/storage/profilepix/{{$othersprofile->image}}" class="w3-circle w3-border profilepix" style="" id=""></img>
									</div>
												<b><i class=" xlarge">{{$othersprofile->name}}</i></b>
									<br />
									<br />
									
									
									
													
													<b><i class=" ">Location :</i></b>
													<i class="">{{$othersprofile->location}}</i>
													<br />
													
													<b><i class=" ">Gender :</i></b>
													<i class="">{{$othersprofile->Gender}}</i>
													<br />
													
													<b><i class=" ">Email :</i></b>
													<i class="">{{$othersprofile->email}}</i>
													<br />
													
													<b><i class=" ">Time Registered :</i></b>
													<i class="">{{$othersprofile->created_at}}</i>
													<br />
													
													<b><i class=" ">Signature :</i></b>
													<br />
													<i class="">{{$othersprofile->signature}}</i>
													<br />
													
													<!--<b><i class=" ">Last seen :</i></b>
													<i class="">15mins ago</i>-->
													
													
													
													
													<br />
													<br />
									
													<!--<div class=" xlarge"><a href="#"><b><i>Edit Profile</i></b></a></div>
																<div class="w3-border-small" id="signedin-line"></div>-->
													<div class=" xlarge"><a href="/{{$othersprofile->name}}/{{$othersprofile->id}}/topics"><b><i>{{$othersprofile->name}} Topics</i></b></a></div>
																<div class="w3-border-small" id="signedin-line"></div>
													<div class=" xlarge"><a href="#"><b><i>{{$othersprofile->name}} Posts</i></b></a></div>
																<div class="w3-border-small" id="signedin-line"></div>
													<div class=" xlarge"><a href="#"><b><i>Follow User</i></b></a></div>
																<div class="w3-border-small" id="signedin-line"></div>
													<div class=" xlarge"><a href="#"><b><i>Email User</i></b></a></div>
																<div class="w3-border-small" id="signedin-line"></div>
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
													<br />
													<br />
													<br />
									
						
						</div>
			</div>
			
			
			
			


    @endsection