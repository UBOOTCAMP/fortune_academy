@extends('layouts.login')

@section('title')
    Login | Fortune Academy
@endsection
@section('content')
    <form method="POST" action="{{ route('login') }}">
        <p class="login-card-description">Sign into your account</p>
        @csrf
        <div class="form-group">
            <input id="email" type="email"
                   class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus
                   placeholder="Enter your email address">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-group mb-4">
            <input id="password" type="password"
                   class="form-control @error('password') is-invalid @enderror" name="password"
                   required autocomplete="current-password" placeholder="Enter Password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-grad text-white float-left mr-5">
            {{ __('Login') }}
        </button>
        @if(env('MAIL_MAILER') &&
            env('MAIL_PORT') &&
            env('MAIL_HOST') &&
            env('MAIL_USERNAME') &&
            env('MAIL_PASSWORD') &&
            env('MAIL_ENCRYPTION')
            )
            <div class="ml-5 pt-2">
                <a class="link" href="{{ route('password.request') }}">
                    @if (Route::has('password.request'))
                        {{ __('Forgot Your Password?') }}
                    @endif
                </a>
            </div>
        @endif
    </form>
@endsection
