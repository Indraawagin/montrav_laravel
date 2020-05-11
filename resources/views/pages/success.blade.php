@extends('layouts.success')

@section('title')
Success Checkout
@endsection

@section('content')
{{-- Main Success --}}
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/icon_succes.png') }}" alt="" />
            <h1>Yay! Success</h1>
            <p>
                We've sent your email for trip to instruction
                <br />
                please read it as well
            </p>
            <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>
{{-- End of Main Success --}}
@endsection