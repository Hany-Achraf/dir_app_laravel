@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Destinations
                        <a href="{{ url('destinations/create') }}" class="btn btn-primary float-right">Add New Destination</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Created at</th>
                                <th>Last update at</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($destinations as $destination)
                            <tr>
                                <td>{{ $destination->id }}</td>
                                <td>{{ $destination->name }}</td>
                                <td>
                                    <img src="{{ asset($destination->img_path) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>{{ Carbon\Carbon::Now() }}</td>
                                <td>{{ Carbon\Carbon::Now() }}</td>
                                <td>
                                    <a href="{{ url('destinations/'.$destination->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('destinations/'.$destination->id) }}" method="POST">
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
