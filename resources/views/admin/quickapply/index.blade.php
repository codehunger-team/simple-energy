@extends('layouts.admin')

@section('main-content')

@if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Applied Quickly</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>State</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i = count($quickApplys); @endphp
                    @foreach($quickApplys as $quickApply)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $quickApply->name }}</td>
                        <td>{{ $quickApply->email }}</td>
                        <td>{{ $quickApply->number }}</td>
                        <td>{{ $quickApply->state }}</td>
                    </tr>
                    @php $i--; @endphp
                    @endforeach
                  
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
