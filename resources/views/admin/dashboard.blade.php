@extends('admin.layouts.index')
@section('title', 'Room List')
@section('content')
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!--  /Traffic -->
            <div class="clearfix"></div>
            <!-- Orders -->
            <div class="orders">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Available Room</h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead class="">
                                            <tr>
                                                <th>No</th>
                                                <th>Room Type</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="serial">1</td>
                                                <td> Room 1</td>
                                                <td>
                                                    <span class="badge badge-complete">Available</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">2</td>
                                                <td> Room 2</td>
                                                <td>
                                                    <span class="badge badge-complete">Available</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">3</td>
                                                <td> Room 3</td>
                                                <td>
                                                    <span class="badge badge-danger">Not Available</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">4</td>
                                                <td> Room 4</td>
                                                <td>
                                                    <span class="badge badge-danger">Not Available</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">5</td>
                                                <td> Room 5</td>
                                                <td>
                                                    <span class="badge badge-complete">Available</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Patient</h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead class="">
                                            <tr>
                                                <th>No</th>
                                                <th>Name Patient</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="serial">1</td>
                                                <td> John </td>
                                                <td>
                                                    <span class="badge badge-primary">Male</span>
                                                </td>
                                                <td> 13 </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">2</td>
                                                <td> Mika </td>
                                                <td>
                                                    <span class="badge badge-primary">Male</span>
                                                </td>
                                                <td> 31 </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">3</td>
                                                <td> Alexa</td>
                                                <td>
                                                    <span class="badge badge-pending">Female</span>
                                                </td>
                                                <td> 23 </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">4</td>
                                                <td> Rachel</td>
                                                <td>
                                                    <span class="badge badge-pending">Female</span>
                                                </td>
                                                <td> 26 </td>
                                            </tr>
                                            <tr>
                                                <td class="serial">5</td>
                                                <td> Cheryl</td>
                                                <td>
                                                    <span class="badge badge-pending">Female</span>
                                                </td>
                                                <td> 16 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.col-lg-8 -->
                </div>
            </div>
            <div class="col-xl-20">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">InPatient</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead class="">
                                    <tr>
                                        <th>No</th>
                                        <th>Patient Name</th>
                                        <th>Room Type</th>
                                        <th>Gender</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1</td>
                                        <td> John </td>
                                        <td> Room 1 </td>
                                        <td>
                                            <span class="badge badge-primary">Male</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2</td>
                                        <td> Yeonnie</td>
                                        <td> Room 2 </td>
                                        <td>
                                            <span class="badge badge-pending">Female</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3</td>
                                        <td> Vena</td>
                                        <td> Room 3 </td>
                                        <td>
                                            <span class="badge badge-pending">Female</span>
                                        </td>
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
