@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title"
                            value="{{ $item->title }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Location"
                            value="{{ $item->location }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="about">About</label>
                        <textarea name="about" rows="10"
                            class="d-block w-100 form-control">{{ $item->about }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured Event"
                            value="{{$item->featured_event }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" placeholder="Language"
                            value="{{$item->language }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="food">Food</label>
                        <input type="text" class="form-control" name="food" placeholder="Food"
                            value="{{ $item->food }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-3">
                        <label for="depature_date">Depature Date</label>
                        <input type="date" class="form-control" name="depature_date" placeholder="Depature Date"
                            value="{{ $item->depature_date }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration"
                            value="{{ $item->duration }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $item->type}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-xl-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price"
                            value="{{ $item->price }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Edit</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection