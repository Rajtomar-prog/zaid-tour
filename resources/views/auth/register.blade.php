@extends('auth.auth-app')
@section('page_title', ' Register')

@section('content_auth')

<h3 class="text-center">{{ __('Register') }}</h3>
<div class="card-body ">
    <div class="card-body ">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <span class="input-icon"><i class="fas fa-user"></i></span>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>
                    
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-icon"><i class="fas fa-envelope"></i></span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-icon"><i class="fas fa-lock"></i></span>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required placeholder="Password" autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-icon"><i class="fas fa-lock"></i></span>
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary custom-btn">Sign up</button>
            </div>
        </form>
        <div class="bottom-strip">
            <p class="m-0">Already have an account? <a href="{{ route('login') }}"><b>Log in</b></a> now!</p>
        </div>
    </div>
</div>

@endsection