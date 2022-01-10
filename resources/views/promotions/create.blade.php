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
                    <h4>Add Promotion
                        <a href="{{ url('promotions') }}" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('promotions') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Business: </label>
                            <select>
                                @foreach ($businesses as $business)
                                    <option value="{{ $business->id }}">{{ $business->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">End date:</label>
                            <input type="date" name="end_date" class="form-control" required>
                        </div>
                        <div class="form-outline mb-4">
                            <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image:</label>
                            <input type="file" name="image" class="form-control" placeholder="Poster" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Promotion</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
