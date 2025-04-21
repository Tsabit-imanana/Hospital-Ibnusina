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
                                            @foreach ($rooms as $room)
                                                <tr>
                                                    <td class="serial">{{ $loop->iteration }}</td>
                                                    <td> {{ $room->type }}</td>
                                                    <td>
                                                        @if ($room->status == 'available')
                                                            <span class="badge badge-complete">{{ $room->status }}</span>
                                                        @elseif ($room->status == 'unavailable')
                                                            <span class="badge badge-danger">{{ $room->status }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                            @foreach ($patients as $patient)
                                                <tr>
                                                    <td class="serial">{{ $loop->iteration }}</td>
                                                    <td> {{ $patient->name }} </td>
                                                    <td>
                                                        @if ($patient->gender == 'male')
                                                            <span class="badge badge-primary">Male</span>
                                                        @elseif ($patient->gender == 'female')
                                                            <span class="badge badge-pending">Female</span>
                                                        @endif
                                                    </td>
                                                    <td> {{ $patient->age() }} </td>
                                                </tr>
                                            @endforeach
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
