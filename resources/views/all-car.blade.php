@extends('layout.main')

@section('content')
<body>
    <div class="card">
        <div class="card-header">
            <h2>Cars<h2>
        </div>
    
<div class="card-body">
<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Make</th>
        <th>Model</th>
        <th>License number</th>
        <th>Weight</th>
        <th>Registration year</th>
        <th>Actions</th>
        <th></th>
        <th></th>

    </tr>
    <form action="/car/add" method="POST">
    @csrf
    <tr>
        <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Enter the car name"></td>
        <td><input class="form-control" type="text" name="make" placeholder="Enter the company which created it"></td>
        <td><input class="form-control" type="text" name="model" placeholder="Enter the model of a car"></td>
        <td><input class="form-control" type="text" name="license_number" placeholder="Enter the license number"></td>
        <td><input class="form-control" type="number" step="any" name="weight" placeholder="Enter the weight of a car"></td>
        <td><input class="form-control" type="number" step="any" name="registration_year" placeholder="Enter the year of a car"></td>
        <td><button class="btn btn-success" type="submit">Add</button></td>
        <td>Age</td>
        <td></td>
    </tr>
    </form>

    @foreach($car as $cr)
    <tr>
        <td>{{ $cr->id }}</td>
        <td>{{ $cr->name }}</td>
        <td>{{ $cr->make }}</td>
        <td>{{ $cr->model }}</td>
        <td>{{ $cr->license_number }}</td>
        <td>{{ $cr->weight }}</td>
        <td>{{ $cr->registration_year }}</td>
        <td>{{ $cr->created_at ? $cr->created_at->diffInMinutes(now()) : 0}} Minutes ago</td>
        <td>{{2020 - $cr->registration_year}} years old</td>
        <td>
            <form action="/car/delete" method="post">
            @csrf
                <input type="hidden" name="car_id" value=" {{ $cr->id }} "/>
                <button class="btn btn-danger">Delete</button>
            </form>
            <a href="/car/edit?car_id={{ $cr->id }}" class="btn btn-primary">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
</body>
@endsection