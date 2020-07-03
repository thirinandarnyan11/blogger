@extends('layouts.app')

@section('content')
  <div class="main">

        <!-- Sign up form -->
        <section class="signup ftco-animate">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">{{ __('Register') }}</h2>
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <input type="radio" name="radiorole" id="agree-term" class="agree-term" value="blogger"/>Blogger
                                <input type="radio" name="radiorole" id="agree-term" class="agree-term" value="user" />User 
                            </div>

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"  required autocomplete="phone" autofocus placeholder="Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="date"><i class="zmdi zmdi-calendar-note"></i></label>
                                <input id="date" type="Date" class="form-control @error('date') is-invalid @enderror" name="dob"  required autocomplete="date" autofocus placeholder="Date"/>
                            </div>
                             <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-my-location"></i></label>
                                <input id="address" type="textarea" class="form-control @error('address') is-invalid @enderror" name="address"  required autocomplete="address" autofocus placeholder="Address"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit"  name="signup" id="signup" class="form-submit btn-sm" value="{{ __('Register') }}"/> 
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('logintemplate/images/signin_image.jpg')}}" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

       
    </div>
@endsection
