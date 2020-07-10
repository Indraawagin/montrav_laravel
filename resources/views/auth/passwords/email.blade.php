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
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="text-center">
                                <img src="{{ url('frontend/images/ic_logo.png') }}" class="w-50 mb-4" alt="" />
                            </div>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-login btn-block">
                                {{ __('Send Password Reset Link') }}
                            </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection