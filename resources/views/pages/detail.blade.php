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
                        <h1>Nusa Penida</h1>
                        <p>Republik of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ url('frontend/images/gallery_1.jpg') }}" alt="" class="xzoom"
                                    id="xzoom-default" xoriginal="{{ url('frontend/images/gallery_1.jpg') }}" />
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{ url('frontend/images/gallery_1.jpg') }} ">
                                    <img src="{{ url('frontend/images/gallery_1.jpg') }}" class="xzoom-gallery"
                                        xpreview="{{ url('frontend/images/gallery_1.jpg') }}" alt="" /></a>
                                <a href="{{ url('frontend/images/child_2.jpg') }} ">
                                    <img src="{{ url('frontend/images/child_2.jpg') }}" class="xzoom-gallery"
                                        xpreview="{{ url('frontend/images/child_2.jpg') }}" alt="" /></a>
                                <a href="{{ url('frontend/images/child_3.jpg') }} ">
                                    <img src="{{ url('frontend/images/child_3.jpg') }}" class="xzoom-gallery"
                                        xpreview="{{ url('frontend/images/child_3.jpg') }}" alt="" /></a>
                                <a href="{{ url('frontend/images/child_4.jpg') }} ">
                                    <img src="{{ url('frontend/images/child_4.jpg') }}" class="xzoom-gallery"
                                        xpreview="{{ url('frontend/images/child_4.jpg') }}" alt="" /></a>
                                <a href="{{ url('frontend/images/child_5.jpg') }} ">
                                    <img src="{{ url('frontend/images/child_5.jpg') }}" class="xzoom-gallery"
                                        xpreview="{{ url('frontend/images/child_5.jpg') }}" alt="" /></a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Nusa Penida is an island southeast of Indonesia's island Bali
                            and a district of Klungkung Regency that includes the
                            neighbouring small island of Nusa Lembongan. The Badung Strait
                            separates the island and Bali. The interior of Nusa Penida is
                            hilly with a maximum altitude of 524 metres. It is drier than
                            the nearby island of Bali.
                        </p>
                        <p>
                            Nusa Penida, and neighbouring Lembongan and Ceningan islands,
                            are a bird sanctuary. The islands communities have used
                            traditional Balinese village regulations to create the
                            sanctuary. The idea of a sanctuary came from the Friends of
                            the National Parks Foundation (FNPF).
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="featured-img" />
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{ url('frontend/images/ic_language.png') }}" alt="" class="featured-img" />
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{ url('frontend/images/ic_foods.png') }}" alt="" class="featured-img" />
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{ url('frontend/images/member-1.png') }}" alt="" class="member-img mr-1" />
                            <img src="{{ url('frontend/images/member-2.png') }}" alt="" class="member-img mr-1" />
                            <img src="{{ url('frontend/images/member-3.png') }}" alt="" class="member-img mr-1" />
                            <img src="{{ url('frontend/images/member-4.png') }}" alt="" class="member-img mr-1" />
                            <img src="{{ url('frontend/images/member-9.png') }}" alt="" class="member-img mr-1" />
                        </div>
                        <hr />
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Featured Event</th>
                                <td width="50%" class="text-right">
                                    30 Mar, 2020
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">
                                    4D 3N
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">
                                    Open Trip
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    $80,00 / Person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{ url('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
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
<script src="{{ url('frontend/libraries/xZoom/xzoom.min.js') }}"></script>

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