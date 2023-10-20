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
            <div class="row">
                <div class="col-lg-10">
                    <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                </div>
                <div class="col-lg-2">
                    <a href="{{ url('product/create') }}" class="btn btn-info mb-2"><span class="text text-right">Add
                            New</span></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Model No</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Model No</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i = count($products); @endphp
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $product->modal_no }}</td>
                                <td>{{ $product->color }}</td>
                                <td>{{ $product->price }}</td>
                                <td class="text-center"><a href="{{ asset($product->image) }}" target="_blank"><img
                                            src="{{ asset($product->image) }}" alt=""
                                            style="widows: 120px; height:60px"></a></td>
                                <td>
                                    <a href="product/{{ $product->id }}" class="btn btn-success btn-sm rounded-0"
                                        type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                            class="fa fa-edit"></i></a>

                                    <form method="POST" action="{{ route('product.destroy', $product->id) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip"
                                            data-placement="top" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php $i--; @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
