@extends('admin.layouts.index')
@section('title', 'Hospital Cost List')
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
                        <h4 class="box-title mb-0">Hospital Cost</h4>
                        <div class="d-flex align-items-center" style="gap: 10px;">
                            <form action="{{ route('admin.hospital-cost.index') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control form-control-sm"
                                    placeholder="Search patient..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-sm btn-primary ms-2"><i
                                        class="fa fa-search"></i></button>
                            </form>
                            <a href="{{ route('admin.hospital-cost.create') }}" class="btn btn-sm btn-success text-white">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Patient Name</th>
                                        <th>Health Patient</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hospitalCosts as $index => $hospitalCost)
                                        <tr>
                                            <td class="serial">{{ $index + 1 }}</td>
                                            <td>{{ $hospitalCost->patient->name }}</td> <!-- Nama pasien -->
                                            <td>{{ $hospitalCost->health_patient }}</td> <!-- Layanan kesehatan -->
                                            <td>Rp {{ number_format($hospitalCost->amount, 0, ',', '.') }}</td>
                                            <!-- Jumlah dengan format uang -->
                                            <td>
                                                <!-- Edit dan Delete Button -->
                                                {{-- <a href="{{ route('admin.hospital-cost.edit', $hospitalCost->id) }}"
                                                    class="btn btn-warning">
                                                    <i class="fa fa-pencil"></i>
                                                </a> --}}
                                                <form action="{{ route('admin.hospital-cost.destroy', $hospitalCost->id) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
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