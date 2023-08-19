@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">All Brand</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Brand</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                @can('Brand.add')
                    <div class="btn-group">
                        <a href="{{ route('add.brand') }}" class="btn btn-primary">Add Brand</a>
                    </div>
                @endcan
            </div>
        </div>
        <!--end breadcrumb-->

        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Brand Name </th>
                                <th>Brand Image </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->brand_name }}</td>
                                    <td> <img src="{{ asset($item->brand_image) }}" style="width: 70px; height:40px;"> </td>

                                    <td>
                                        @can('Brand.edit')
                                            <a href="{{ route('edit.brand', $item->id) }}" class="btn btn-info">Edit</a>
                                        @endcan
                                        @can('Brand.delete')
                                            <a href="{{ route('delete.brand', $item->id) }}" class="btn btn-danger"
                                                id="delete">Delete</a>
                                        @endcan

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Brand Name </th>
                                <th>Brand Image </th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>



    </div>
@endsection
