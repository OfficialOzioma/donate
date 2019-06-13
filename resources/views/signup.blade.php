@extends('layout.signup_signin')

@section('content')

<!-- inner block start here -->
<div class="signup-page-main">
    <div class="signup-main">  	
        <div class="signup-head">
            <h1>Register</h1>
        </div>
        <div class="signup-block">
            <form method="POST" action="/register">
                {{ csrf_field() }}
            <input type="text" name="name" placeholder="Enter your Fullname" value="{{ old('name') }}" >
                    @if($errors->has('name'))
                        <div class="form-group">
                            <div class="alert alert-danger">
                                <i class="fa fa-warning fa-lg"></i>&nbsp;&nbsp;
                                @foreach ($errors->get('name') as $message)
                                    {{$message}}
                                @endforeach
                                
                            </div> 
                        </div>
                    @endif
                <input type="text" name="email" placeholder="Enter your Email" value="{{ old('email') }}" >
                    @if($errors->has('email'))
                        <div class="form-group">
                            <div class="alert alert-danger">
                            <i class="fa fa-warning fa-lg"></i>&nbsp;&nbsp;
                            @foreach ($errors->get('email') as $message)
                                {{$message}}
                            @endforeach
                            </div> 
                        </div>
                    @endif
                <input type="text" name="username" placeholder="Enter your Username" value="{{ old('username') }}" >
                    @if($errors->has('username'))
                        <div class="form-group">
                            <div class="alert alert-danger">
                            <i class="fa fa-warning fa-lg"></i>&nbsp;&nbsp;
                            @foreach ($errors->get('username') as $message)
                                {{$message}}
                            @endforeach
                            </div> 
                        </div>
                    @endif
                <input type="password" name="password" class="lock" placeholder="Enter your Password" value="{{ old('password') }}"  >
                @if($errors->has('password'))
                    <div class="form-group">
                        <div class="alert alert-danger">
                        <i class="fa fa-warning fa-lg"></i>&nbsp;&nbsp;
                        @foreach ($errors->get('password') as $message)
                            {{$message}}
                        @endforeach
                        </div> 
                    </div>
                @endif
                <div class="forgot-top-grids">
                    <div class="forgot-grid">
                        <ul>
                            <li>
                                <input type="checkbox" id="brand1" name="conditions" value="accepted" >
                                <label for="brand1"><span></span>I agree to the terms</label>
                            </li>
                        </ul>
                    </div>
                       
                    <div class="clearfix"> </div>
                </div>
                @if($errors->has('conditions'))
                    <div class="form-group">
                        <div class="alert alert-danger">
                        <i class="fa fa-warning fa-lg"></i>&nbsp;&nbsp;
                        @foreach ($errors->get('conditions') as $message)
                            {{$message}}
                        @endforeach
                        </div> 
                    </div>
                @endif
                <input type="submit"  value="Sign up">														
            </form>
            <div class="sign-down">
                <h4>Already have an account? <a href="{{ asset('/login') }}"> Login here.</a></h4>
                <h5><a href="{{asset ('/')}}">Go Back to Home</a></h5>
            </div>
        </div>
    </div>
</div>
<!--inner block end here-->

@endsection