@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Destination
                        <a href="{{ url('destinations') }}" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('destinations') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Destination</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
