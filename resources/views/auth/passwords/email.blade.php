@extends('auth.auth-app')
@section('page_title', ' Reset Password')

@section('content_auth')

<h3 class="text-center">{{ __('Reset Password') }}</h3>
<div class="card-body ">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <span class="input-icon"><i class="fas fa-envelope"></i></span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary custom-btn">{{ __('Send Password Reset Link') }}</button>
        </div>
    </form>
    <div class="bottom-strip">
        <p class="m-0">No account yet? <a href="{{ route('register') }}"><b>Sign up</b></a> now!</p>
    </div>
</div>

@endsection