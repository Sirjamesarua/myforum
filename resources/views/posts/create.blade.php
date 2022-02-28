@extends('layouts.app')
    @section('content')
    @php
		use App\Http\Controllers\Controller;
		use App\Http\Controllers\PostsController;
    @endphp             
 

			
			<!--CREATE POST-->
			<div class="login-container border-center">
					<div class="login w3-center w3-grey w3-margin">
					
								<br />
								<br />
								<form action="{{action('App\Http\Controllers\PostsController@store')}}" method="POST" style="color:#0C1730;" enctype="multipart/Form-data">
									{{method_field('POST')}}
									@csrf
								
										<b><i class=" xlarge"><u>Create Post</u></i></b>
										<br />
								
										<!--<b><i class=" xlarge">
										<a href="#">Myforum</a> /
										<a href="#">News</a>
										</i></b>-->
										<br />
										<br />
										<br />
										
								
										<b><i class=" xlarge">Topic :</i></b>
										<br />
										<input type="text" name="topic" class="form-input" required></input>
										
										<br />
										<br />
										<b><i class=" xlarge">Content :</i></b>
										<br />
										<textarea rows="10" name="content" class="form-input" required></textarea>

										<!--CATEGORY DROPDOWN-->
										<br />
										<br />
										<b><i class=" xlarge">Category :</i></b>
										<br />
										<select name="post-category" style="width:50%;">
											<option value="Education">Education</option>
											<option value="Business">Business</option>
											<option value="Health">Health</option>
											<option value="Others">Others</option>
										</select>
										
										<br />
										<br />
										<b><i class=" xlarge">Images :</i></b>
										<br />
										<input type="file" name="images[]" multiple></input>

										<br />
										<br />
										<br />
										<input type="submit" value="Create Post" class="loginform  xlarge w3-round-large"></input>
										<br />
										
								</form>
								<br />
								<br />

					</div>
			</div>
			
			
			
			                              
    @endsection