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
                        <h4 class="box-title">List Rooms</h4>
                        <button type="button" class="btn btn-sm btn-success">
                            <i class="fa fa-plus"></i> Add
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead class="">
                                    <tr>
                                        <th>No</th>
                                        <th>Room Type</th>
                                        <th>Facility</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1</td>
                                        <td> Room 1 </td>
                                        <td> Bed, Table, Sofa, AC </td>
                                        <td> Rp 900.000 / day </td>
                                        <td>
                                            <span class="badge badge-complete">Available</span>
                                        </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2</td>
                                        <td> Room 2 </td>
                                        <td> Bed, Table</td>
                                        <td> Rp 500.000 / day </td>
                                        <td>
                                            <span class="badge badge-complete">Available</span>
                                        </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3</td>
                                        <td> Room 3 </td>
                                        <td> Bed</td>
                                        <td> Rp 300.000 / day </td>
                                        <td>
                                            <span class="badge badge-complete">Available</span>
                                        </td>
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
