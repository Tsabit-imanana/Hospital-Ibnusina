@extends('admin.layouts.index')
@section('title', 'Patient List')
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
                        <h4 class="box-title">Patient List</h4>
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
                                        <th>Birth Date</th>
                                        <th>Age</th>
                                        <th>Adress</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1</td>
                                        <td> John </td>
                                        <td> 21/02/2000 </td>
                                        <td> 25 </td>
                                        <td> Jl Seruni </td>
                                        <td>
                                            <span class="badge badge-primary">Male</span>
                                        </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2</td>
                                        <td> Yeonnie </td>
                                        <td> 11/03/2002 </td>
                                        <td> 23 </td>
                                        <td> Jl Raya </td>
                                        <td>
                                            <span class="badge badge-pending">Female</span>
                                        </td>
                                        <td><button type="button" class="btn btn-danger"><i
                                                    class="fa fa-trash"></i></button><button type="button"
                                                class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3</td>
                                        <td> kiya </td>
                                        <td> 03/05/1999 </td>
                                        <td> 26 </td>
                                        <td> Jl Sigura </td>
                                        <td>
                                            <span class="badge badge-pending">Female</span>
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
