@extends('adminlte::page')


@section('title')
show Employe | Laravel Employes
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
                        <h4>{{ $employe->fullname }}</h4>
                    </div>
                </div>
                <div class="text-center font-weight-bold text-uppercase mt-2">
                    <a href="{{ route('employees.vacation-request',$employe->registration_number) }}" class="btn btn-outline-dark">
                        Vacation Request
                    </a>
                    <a href="{{ route('user.certificate-request',$employe->registration_number) }}" class="btn btn-outline-danger">
                        Work Certificate
                    </a>
                </div>
                <hr>
                <div class="card-body">

                        <div class="form-group mb-3">
                            <label for="">Registration Number</label>
                            <input type="text" disabled name="registration_number" class="form-control rounded-0" placeholder="registration_number" value="{{ $employe->registration_number }}" maxlength="8">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">Fullname</label>
                            <input type="text" disabled name="fullname" class="form-control rounded-0" placeholder="FullName" value="{{ $employe->fullname }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Depart</label>
                            <input type="text" disabled name="depart" class="form-control rounded-0" placeholder="depart" value="{{ $employe->depart }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Hire Date</label>
                            <input type="date" disabled name="date_hire" class="form-control rounded-0" placeholder="date_hire" value="{{ $employe->date_hire }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone</label>
                            <input type="text" disabled name="phone" class="form-control rounded-0" placeholder="Phone" value="{{ $employe->phone }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Adress</label>
                            <input type="text" disabled name="address" class="form-control rounded-0" placeholder="address" value="{{ $employe->address }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">City</label>
                            <input type="text" disabled name="city" class="form-control rounded-0" placeholder="city" value="{{ $employe->city }}">
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
