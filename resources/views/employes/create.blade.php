@extends('adminlte::page')


@section('title')
    add new employe | Laravel Employes
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
                        <h4>Add new Employe</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('employes.store') }}" method="POST" class="mt-3">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Registration Number</label>
                            <input type="text" name="registration_number" class="form-control" placeholder="registration_number" value="{{ old('registration_number') }}" maxlength="8">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" class="form-control" placeholder="FullName" value="{{ old('fullname') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Depart</label>
                            <input type="text" name="depart" class="form-control" placeholder="depart" value="{{ old('depart') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Hire Date</label>
                            <input type="date" name="date_hire" class="form-control" placeholder="date_hire" value="{{ old('date_hire') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Adress</label>
                            <input type="text" name="address" class="form-control" placeholder="address" value="{{ old('address') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">City</label>
                            <input type="text" name="city" class="form-control" placeholder="city" value="{{ old('city') }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Submit
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
