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
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection