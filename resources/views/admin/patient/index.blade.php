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
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td class="serial">{{ $loop->iteration }}</td>
                                            <td> {{ $patient->name }} </td>
                                            <td> {{ $patient->birthdateFormat() }} </td>
                                            <td> {{ $patient->age() }} </td>
                                            <td> {{ $patient->address }} </td>
                                            <td>
                                                @if ($patient->gender == 'male')
                                                    <span class="badge badge-primary">Male</span>
                                                @elseif ($patient->gender == 'female')
                                                    <span class="badge badge-pending">Female</span>
                                                @endif
                                            </td>
                                            <td><button type="button" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button><button type="button"
                                                    class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>
                                        </tr>
                                    @endforeach
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
