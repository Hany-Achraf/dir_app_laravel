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

                    <form action="{{ url('events') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Organizer</label>
                            <input type="text" name="organizer" class="form-control" required>
                        </div>

                        {{-- <div class="input-group mb-3">
                            <input type="text" class="form-control" id="datetimepicker">
                        </div> --}}

                        <div class='input-group form-group date'>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type='text' name="date_time" class="form-control" id="datetimepicker" />
                        </div>

                        {{-- <div class="form-group">
                            <div class='input-group date' id='datetimepicker'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div> --}}


                        <div class="form-outline mb-4">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" required>
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
