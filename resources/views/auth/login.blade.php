@extends('auth.auth-app')
@section('page_title', ' Login')

@section('content_auth')

<h3 class="text-center">Login</h3>
<div class="card-body ">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <span class="input-icon"><i class="fas fa-envelope"></i></span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <span class="input-icon"><i class="fas fa-lock"></i></span>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" autocomplete="current-password" placeholder="Password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="d-flex justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Remember me</label>
            </div>
            @if (Route::has('password.request'))
            <a class="forgot-crendential" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary custom-btn">Sign in</button>
        </div>
    </form>
    <div class="bottom-strip">
        <p class="m-0">No account yet? <a href="{{ route('register') }}"><b>Sign up</b></a> now!</p>
    </div>
</div>

@endsection