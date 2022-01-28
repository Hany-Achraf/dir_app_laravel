{{-- @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit Event
                        <a href="{{ url('events') }}" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('events/'.$event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$event->name}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Date and time</label>
                            <input type="datetime-local" name="date_time" value="{{$event->date_time}}" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset($event->img_path) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Event</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}




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
                    <h4>Add Event
                        <a href="{{ url('events') }}" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('events/'.$event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$event->name}}" required>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="organizer" class="form-control" placeholder="Organizer" value="{{$event->organizer}}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Date and time</label>
                            <input type="datetime-local" name="date_time" class="form-control"
                            value="{{ date('Y-m-d\TH:i', strtotime($event->date_time)) }}" required>
                        </div>

                        <div class="form-outline mb-4">
                            <textarea name="description" class="form-control" placeholder="Description" rows="3"> {{$event->description}} </textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset($event->img_path) }}" width="70px" height="70px" alt="Image">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Event</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
