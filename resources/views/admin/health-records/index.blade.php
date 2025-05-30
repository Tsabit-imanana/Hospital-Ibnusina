@extends('admin.layouts.index')
@section('title', 'Health Records List')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-20">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title mb-0">Health Records</h4>
                        <div class="d-flex align-items-center" style="gap: 10px;">
                            <form action="{{ route('admin.health-record.index') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control form-control-sm"
                                    placeholder="Search..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-sm btn-primary ms-2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                            <a href="{{ route('admin.health-record.create') }}" type="button"
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
                                        <th>Room Type</th>
                                        <th>Health Records</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($health_records as $item)
                                        {{-- @dd(implode(', ', array_keys(json_decode($item->check_ups, true)))) --}}
                                        <tr>
                                            <td class="serial">{{ $loop->iteration }}</td>
                                            <td> {{ $item->patient->name }} </td>
                                            <td> {{ $item->room->type }} </td>
                                            <td> {{ implode(separator: ', ', array: array_keys($item->check_ups, true)) }} </td>
                                            <td> Rp {{ $item->totalPriceFormat() }} </td>
                                            <td>
                                                @if($item->status === 'in_progress')
                                                    <span class="badge bg-warning text-dark">In Progress</span>
                                                @elseif($item->status === 'completed')
                                                    <span class="badge bg-success">Completed</span>

                                                @endif
                                            </td>
                                            <td>
                                                <button onclick="deleteHealthRecord({{ $item->id }})" type="button"
                                                    class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <a href="{{ route('admin.health-record.edit', $item->id) }}" type="button"
                                                    class="btn btn-warning">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
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

    @push('scripts')
        <script>
            function deleteHealthRecord(id) {
                if (!confirm("Are you sure you want to delete this item?")) {
                    return; // user canceled
                }

                fetch(`/admin/health-records/destroy/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                })
                    .then(response => {
                        if (response.ok) {
                            alert("Deleted successfully!");
                            // Optionally: reload or remove the element from DOM
                            location.reload(); // or manually remove item from the page
                        } else {
                            alert("Failed to delete. Please try again.");
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert("An error occurred.");
                    });
            }
        </script>
    @endpush
@endsection