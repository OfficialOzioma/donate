@extends('layout.signup_signin')

@section('content')

<div class="login-page">
	
    <div class="login-main">
		  	
    	<div class="login-head">
			<h1>Login</h1>
		</div>
		<div class="login-block">
			<form method="POST" action="/login">
						{{ csrf_field() }}
					@if(count($errors))
						<div class="alert alert-danger">
                            <i class="fa fa-warning fa-lg"></i>&nbsp;&nbsp;
                                @foreach ($errors->all() as $message)
                                    {{$message}}
                                @endforeach         
						</div>
					@endif 
					<input type="text" name="email" placeholder="Enter Your Email" required>
					<input type="password" name="password" class="lock" placeholder="Enter your Password" required>
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div>
						<div class="forgot">
							<a href="#">Forgot password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Login">	
					<h3>Not a member?<a href="{{asset ('register')}}"> Sign up now</a></h3>				
					
						<h5><a href="{{asset ('/')}}">Go Back to Home</a></h5>
				</form>
		
			</div>
      </div>
</div>
@endsection