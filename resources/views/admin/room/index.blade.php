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
                        <a href="{{ route('admin.room.create') }}" type="button" class="btn btn-sm btn-success">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
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
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td class="serial">{{ $loop->iteration }}</td>
                                            <td> {{ $room->type }} </td>
                                            <td>{{ implode(', ', $room->facilities) }}</td>
                                            <td> Rp {{ number_format($room->price, 0, ',', '.') }} / day </td>
                                            <td>
                                                @if ($room->status == 'available')
                                                    <span class="badge badge-complete">{{ $room->status }}</span>
                                                @elseif ($room->status == 'unavailable')
                                                    <span class="badge badge-danger">{{ $room->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </td>
                                            {{-- <td>
                                                <img src="{{ asset('storage/'.$room->picture) }}" alt="">
                                            </td> --}}
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
