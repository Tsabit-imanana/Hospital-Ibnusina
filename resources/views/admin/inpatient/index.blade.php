@extends('admin.layouts.index')
@section('title', 'Inpatient List')
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
                        <h4 class="box-title">Inpatient List</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead class="">
                                    <tr>
                                        <th>No</th>
                                        <th>Patient Name</th>
                                        <th>Date In</th>
                                        <th>Date Out</th>
                                        <th>Total Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1</td>
                                        <td> John </td>
                                        <td> 22/03/2025 </td>
                                        <td> 23/03/2025 </td>
                                        <td> Rp 1.200.000 </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2</td>
                                        <td> Yeonnie </td>
                                        <td> 23/03/2025 </td>
                                        <td> 25/03/2025 </td>
                                        <td> Rp 1.400.000 </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3</td>
                                        <td> Kiya </td>
                                        <td> 22/03/2025 </td>
                                        <td> 25/03/2025 </td>
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
