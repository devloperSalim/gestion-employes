@extends('adminlte::page')

@section('title')
Vacation Request
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card py-3 my-5">
                    <div class="card-header">
                        <h3>Vacation Request</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>{{ $employe->fullname }}</b> is presently employed with me in the following:
                        </p>
                        <p class="lead">
                            <b>{{ $employe->depart }}</b> department <!-- Corrected 'departement' to 'department' -->
                        </p>
                        <p class="head">
                            He is requesting a vacation starting from <b>__________________</b>
                        </p>
                        <p class="lead">
                            And ends on <b>______________</b>
                        </p>
                        <p class="m-5">
                            ______________
                            ______________
                        </p>
                        <div class="my-4">
                            <a href=""
                                onclick="document.getElementById('printLinke').style.display = 'none'
                                setTimeout(function(){
                                    document.getElementById('printLinke').style.display = 'inline-block'
                                },2000);
                                window.print();
                                "
                                class="btn btn-sm btn-primary" id="printLinke">
                                <i class="fas fa-print"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

