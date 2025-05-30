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
                            <div class="card-body">
                                <div class="table-stats order-table ov-h">
                                    <table class="table">
                                        <thead>
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
                                                        @elseif ($room->status == 'notavailable')
                                                            <span class="badge badge-danger">{{ $room->status }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Patient</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-stats order-table ov-h">
                                    <table class="table">
                                        <thead>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-20">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Inpatient</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Patient Name</th>
                                        <th>Room Type</th>
                                        <th>Gender</th>
                                    </tr>
                                </thead>
                                <tbody>
    @foreach ($inpatients as $inpatient)
        <tr>
            <td class="serial">{{ $loop->iteration }}</td>
            <td>{{ $inpatient->patient->name }}</td>
            <td>{{ $inpatient->room->type }}</td>
            <td>
                @if ($inpatient->patient->gender == 'male')
                    <span class="badge badge-primary">Male</span>
                @elseif ($inpatient->patient->gender == 'female')
                    <span class="badge badge-pending">Female</span>
                @endif
            </td>
        </tr>
    @endforeach
</tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection