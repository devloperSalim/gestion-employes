@extends('adminlte::page')

@section('plugins.Datatables',true)


@section('title')
    List of employes | Laravel Employes
@endsection

@section('content_header')
    <h1> List of employes </h1>
@endsection

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Employees</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fullname</th>
                                <th>Department</th>
                                <th>Hired</th>
                                <th></th>
                        <tbody>
                        </tr>
                        @foreach ($employes as $key => $emplye)
                        <tr>
                            <td>{{ $key+=1 }}</td>
                            <td>{{ $emplye->fullname }}</td>
                            <td>{{ $emplye->depart}}</td>
                            <td>{{ $emplye->date_hire }}</td>
                            <td class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('employes.show', $emplye->registration_number) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('employes.edit', $emplye->registration_number) }}" class="btn btn-sm btn-primary mx-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form id="deleteForm{{ $emplye->registration_number }}" action="{{ route('employes.destroy', $emplye->registration_number) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="deleteEmp('{{ $emplye->registration_number }}')" class="btn btn-sm btn-danger" type="button">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
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

@section('js')
<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        dom: 'Bftrip',
        buttons: ['copy', 'excel', 'csv', 'pdf', 'print', 'colvis']
    });
});

function deleteEmp(registrationNumber) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm' + registrationNumber).submit();
            Swal.fire(
                'Deleted!',
                'Employee has been deleted.',
                'success'
            );
        }
    });
}

@if(session()->has('success'))
Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: "{{ session()->get('success') }}",
    showConfirmButton: false,
    timer: 2000
});
@endif
</script>
@endsection
