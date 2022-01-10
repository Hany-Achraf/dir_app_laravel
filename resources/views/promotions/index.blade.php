@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Promotions
                        <a href="{{ url('promoions/create') }}" class="btn btn-primary float-right">Add New Promotion</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Business</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>End date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promotions as $promotion)
                            <tr>
                                <td>{{ $promotion->id }}</td>
                                <td>{{ $promotion->name }}</td>
                                <td>{{ $promotion->business->name }}</td>
                                <td>{{ $promotion->description }}</td>
                                <td>
                                    <img src="{{ asset($promotion->img_path) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>{{ $promotion->end_date }}</td>
                                <td>
                                    <a href="{{ url('promotions/'.$promotion->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ url('promotions/'.$promotion->id) }}" method="POST">
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
