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
                        <label for="transaction_status">Status</label>
                        <select class="form-control" name="transaction_status">
                            <option value="{{ $item->transaction_status }}">
                                Current Status: ({{ $item->transaction_status }})</option>
                            <option value="IN_CART">In Cart</option>
                            <option value="PENDING">Pending</option>
                            <option value="SUCCESS">Succses</option>
                            <option value="CANCEL">Cancel</option>
                            <option value="FAILED">Failed</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Edit</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection