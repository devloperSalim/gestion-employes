@extends('adminlte::page')


@section('title')
    Update employe | Laravel Employes
@endsection

@section('content_header')
    <h1> add new employe </h1>
@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Update Employe</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('employes.update', $employe->registration_number) }}" method="POST" class="mt-3">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="registration_number">Registration Number</label>
                            <input type="text" name="registration_number" class="form-control" placeholder="Registration Number" value="{{ old('registration_number', $employe->registration_number) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="{{ old('fullname', $employe->fullname) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="depart">Depart</label>
                            <input type="text" name="depart" class="form-control" placeholder="Depart" value="{{ old('depart', $employe->depart) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="date_hire">Hire Date</label>
                            <input type="date" name="date_hire" class="form-control" placeholder="Hire Date" value="{{ old('date_hire', $employe->date_hire) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone', $employe->phone) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address', $employe->address) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city', $employe->city) }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                        <!-- Add other form fields and buttons here if needed -->
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
