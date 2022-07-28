@extends('layouts.app')

@section('title')
    Detail Travel
@endsection

@section('content')
    {{-- Main Detail --}}
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1 id="title">{{ $item->title }}</h1>
                            <p>{{ $item->location }}</p>
                            @if ($item->galleries->count())
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <img src="{{ Storage::url($item->galleries[1]->image) }}" alt=""
                                            class="xzoom" id="xzoom-default"
                                            xoriginal="{{ Storage::url($item->galleries[1]->image) }}" />
                                    </div>
                                    <div class="xzoom-thumbs">
                                        @foreach ($item->galleries->forget(0) as $gallery)
                                            <a href="{{ Storage::url($gallery->image) }} ">
                                                <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery"
                                                    width="128" xpreview="{{ Storage::url($gallery->image) }}"
                                                    alt="" /></a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <h2>Tentang Wisata</h2>
                            <p>
                                {!! $item->about !!}
                            </p>
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt=""
                                        class="featured-img" />
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>{{ $item->featured_event }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ url('frontend/images/ic_language.png') }}" alt=""
                                        class="featured-img" />
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>{{ $item->language }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ url('frontend/images/ic_foods.png') }}" alt=""
                                        class="featured-img" />
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>{{ $item->food }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="{{ url('frontend/images/member-1.png') }}" alt=""
                                    class="member-img mr-1" />
                                <img src="{{ url('frontend/images/member-2.png') }}" alt=""
                                    class="member-img mr-1" />
                                <img src="{{ url('frontend/images/member-3.png') }}" alt=""
                                    class="member-img mr-1" />
                                <img src="{{ url('frontend/images/member-4.png') }}" alt=""
                                    class="member-img mr-1" />
                                <img src="{{ url('frontend/images/member-9.png') }}" alt=""
                                    class="member-img mr-1" />
                            </div>
                            <hr />
                            <h2>Trip Informations</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Featured Event</th>
                                    <td width="50%" class="text-right">
                                        {{ \Carbon\Carbon::create($item->date_of_dapature)->format('F n, Y') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">
                                        {{ $item->duration }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">
                                        {{ $item->type }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">
                                        ${{ $item->price }},00 / Person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            @auth
                                <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                        Join Now
                                    </button>
                                </form>
                            @endauth

                            @guest
                                <a href="{{ url('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                    Login or Register to Join
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- End of Detail --}}
@endsection

@push('prepend-style')
    {{-- Style xZomm for css --}}
    <link rel="stylesheet" href="{{ url('frontend/libraries/xZoom/xzoom.css') }}" />
@endpush

@push('addon-script')
    {{-- Script xZoom for javascript --}}
    <script src="{{ url('frontend/libraries/xZoom/xzoom.js') }}"></script>

    {{-- Script Jquery for Javascript --}}
    <script>
        $(document).ready(function() {
            $(".xzoom, .xzoom-gallery").xzoom({
                zoomWidth: 300,
                title: false,
                tint: "#333",
                xoffset: 15
            });
        });
    </script>
@endpush
