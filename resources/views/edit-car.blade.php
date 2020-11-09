@extends('layout.main')

@section('content')
<form action="/car/update" method="POST">
    <input type="hidden" name="car_id" value="{{ $car->id }}"/>
    @csrf
    <div class="card">
        <div class="card-header">
            <h3>Edit Cars</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $car->name }}"/>
            </div>
            <div class="form-group">
                <label for="name">Make</label>
                <input type="text" class="form-control" name="make" id="make" value="{{ $car->make }}"/>
            </div>
            <div class="form-group">
                <label for="name">Model</label>
                <input type="text" class="form-control" name="model" id="model" value="{{ $car->model }}"/>
            </div>
            <div class="form-group">
                <label for="name">License Number</label>
                <input type="text" class="form-control" name="license_number" id="license_number" value="{{ $car->license_number }}"/>
            </div>
            <div class="form-group">
                <label for="name">Weight</label>
                <input type="number" class="form-control" name="weight" id="weight" value="{{ $car->weight }}"/>
            </div>
            <div class="form-group">
                <label for="name">Registration Year</label>
                <input type="number" class="form-control" name="registration_year" id="registration_year" value="{{ $car->registration_year }}"/>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Save</button>
                <button class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>
</form>