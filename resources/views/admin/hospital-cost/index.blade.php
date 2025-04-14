@extends('admin.layouts.index')
@section('title', 'Room List')
@section('content')
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!--  /Traffic -->
            <div class="clearfix"></div>
            <!-- Orders -->
            <div class="col-xl-20">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title">Hospital Cost</h4>
                        <button type="button" class="btn btn-sm btn-success">
                            <i class="fa fa-plus"></i> Add
                        </button>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead class="">
                                    <tr>
                                        <th>No</th>
                                        <th>Patient Name</th>
                                        <th>Health Patient</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1</td>
                                        <td> John </td>
                                        <td> rongten, ct scan </td>
                                        <td> Rp 1.200.000 </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2</td>
                                        <td> Yeonnie </td>
                                        <td> hematologi, ekg </td>
                                        <td> Rp 1.400.000 </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3</td>
                                        <td> Kiya </td>
                                        <td> rongten, ekg </td>
                                        <td> Rp 1.600.000 </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
            </div>
            <!-- /#add-category -->
        </div>
        <!-- .animated -->
    </div>
@endsection
