@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">Add State </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add State </li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">

                                <form id="myForm" method="post" action="{{ route('store.state') }}">
                                    @csrf

                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Division Name</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <select name="division_id" class="mb-3 form-select"
                                                aria-label="Default select example">
                                                <option selected="">Open this select menu</option>

                                                @foreach ($division as $item)
                                                    <option value="{{ $item->id }}">{{ $item->division_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">District Name</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <select name="district_id" class="mb-3 form-select"
                                                aria-label="Default select example">

                                                <option> </option>



                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">State Name</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="state_name" class="form-control" />
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="px-4 btn btn-primary" value="Save Changes" />
                                        </div>
                                    </div>
                            </div>

                            </form>



                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    state_name: {
                        required: true,
                    },
                },
                messages: {
                    state_name: {
                        required: 'Please Enter State Name',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="division_id"]').on('change', function() {
                var division_id = $(this).val();
                if (division_id) {
                    $.ajax({
                        url: "{{ url('/district/ajax') }}/" + division_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="district_id"]').html('');
                            var d = $('select[name="district_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="district_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .district_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection
