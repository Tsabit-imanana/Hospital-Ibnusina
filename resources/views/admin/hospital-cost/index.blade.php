@extends('admin.layouts.index')
@section('title', 'Hospital Cost List')
@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="clearfix"></div>
        <div class="col-xl-20">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h4 class="box-title mb-0">Hospital Cost</h4>
                    <div class="d-flex align-items-center" style="gap: 10px;">
                        <form action="{{ route('admin.hospital-cost.index') }}" method="GET" class="d-flex">
                            <input type="text" name="search" class="form-control form-control-sm"
                                placeholder="Search patient..." value="{{ request('search') }}">
                            <button type="submit" class="btn btn-sm btn-primary ms-2"><i class="fa fa-search"></i></button>
                        </form>
                                                    <a href="{{ route('admin.hospital-cost.create') }}" type="button"
                                class="btn btn-sm btn-success">
                                <i class="fa fa-plus"></i> Add
                            </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Patient Name</th>
                                    <th>Date In</th>
                                    <th>Date Out</th>
                                    <th>Room Type</th>
                                    <th>Health Record (Check Ups)</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th> {{-- Kolom Action --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hospitalCosts as $hospitalCost)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $hospitalCost->patient->name }}</td>
                                        <td>{{ optional($hospitalCost->inpatient)->date_in ?? '-' }}</td>
                                        <td>{{ optional($hospitalCost->inpatient)->date_out ?? '-' }}</td>
                                        <td>{{ optional($hospitalCost->health_record_room)->type ?? '-' }}</td>
                                        <td>
                                            @if ($hospitalCost->health_record && $hospitalCost->health_record->check_ups)
                                                @foreach($hospitalCost->health_record->check_ups as $key => $value)
                                                    {{ $key }}: {{ $value }}<br>
                                                @endforeach
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>Rp {{ number_format($hospitalCost->grand_total ?? 0, 0, ',', '.') }}</td>
                                        <td>{{ $hospitalCost->status_from_health_record ?? '-' }}</td>
                                        <td>
                                            @if(($hospitalCost->status_from_health_record ?? '') === 'unpaid')
                                                <!-- Tombol Trigger Modal -->
                                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#confirmPaidModal{{ $hospitalCost->id }}">
                                                    Mark Paid
                                                </button>

                                                <!-- Modal Konfirmasi -->
                                                <div class="modal fade" id="confirmPaidModal{{ $hospitalCost->id }}" tabindex="-1" aria-labelledby="confirmPaidModalLabel{{ $hospitalCost->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="{{ route('admin.hospital-cost.markPaid', $hospitalCost->id) }}" method="POST">
                                                                @csrf
                                                                @method('POST')
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="confirmPaidModalLabel{{ $hospitalCost->id }}">Confirm Payment</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to mark this hospital cost as <strong>Paid</strong>?
                                                                    <p><strong>Patient:</strong> {{ $hospitalCost->patient->name }}</p>
                                                                    <p><strong>Total:</strong> Rp {{ number_format($hospitalCost->grand_total ?? 0, 0, ',', '.') }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Yes, Mark as Paid</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <span class="text-success">Paid</span>
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
    </div> <!-- .animated -->
</div>
@endsection
