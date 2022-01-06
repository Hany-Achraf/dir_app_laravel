@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Events
                        <a href="{{ url('events/create') }}" class="btn btn-primary float-right">Add New Event</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Organizer</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date & Time</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->organizer }}</td>
                                <td>{{ $event->description }}</td>
                                <td>
                                    <img src="{{ asset($event->img_path) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>{{ $event->date_time }}</td>
                                <td>
                                    <a href="{{ url('events/'.$event->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('events/'.$event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
