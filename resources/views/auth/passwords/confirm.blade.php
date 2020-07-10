@extends('layouts.login')

@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">
                    We Explore The New<br />
                    Life Much Better
                </h1>
                <img src="{{ url('frontend/images/Card.png') }}" class="w-75 d-none d-sm-flex" alt="" />
            </div>
            <div class="section-right col-12 col-md-4 mr-2">
                <div class="card">

                    <div class="card-body">
                        {{ __('Please confirm your password before continuing.') }}

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-login btn-block">
                                {{ __('Confirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection