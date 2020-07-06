@extends('layouts.app')

@section('content')
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                     <div class="signin-image">
                        <figure><img src="{{asset('logintemplate/images/signin_image.jpg')}}" alt="sing up image"></figure>
                    </div>
                    <div class="signin-form ftco-animate">
                        <h2 class="form-title">{{ __('Login') }}</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" requiredautocomplete="email" autofocus="" placeholder="&nbsp;&nbsp;Enter Email"/>

                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" name="signin" id="signin" class="form-submit btn-sm" >
                                    {{ __('Login') }}
                                </button>
                                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"></a>
                                @endif

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
   

@endsection
