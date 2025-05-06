@extends('admin.layouts.index')
@section('title', 'Inpatient List')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-20">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title mb-0">Inpatient List</h4>
                        <form method="GET" action="{{ route('admin.inpatient.index') }}" class="d-flex"
                            style="max-width: 300px;">
                            <input type="text" name="search" class="form-control me-2" placeholder="Search patient..."
                                value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
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
                                    @foreach ($inpatients as $inpatient)
                                        <tr>
                                            <td class="serial">{{ $loop->iteration }}</td>
                                            <td> {{ $inpatient->patient->name }} </td>
                                            <td> {{ $inpatient->dateInFormat() }} </td>
                                            <td> {{ $inpatient->dateOutFormat() }} </td>
                                            <td> Rp {{ $inpatient->totalPriceFormat() }} </td>
                                            <td>
                                                <button onclick="deleteInpatient({{ $inpatient->id }})" type="button"
                                                    class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <a href="{{ route('admin.inpatient.edit', $inpatient->id) }}" type="button"
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
            function deleteInpatient(id) {
                if (!confirm("Are you sure you want to delete this item?")) {
                    return; // user canceled
                }

                fetch(`/admin/inpatient/destroy/${id}`, {
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