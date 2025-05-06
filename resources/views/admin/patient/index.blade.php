@extends('admin.layouts.index')
@section('title', 'Patient List')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-20">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title">Patient List</h4>
                        <form action="{{ route('admin.patient.index') }}" method="GET" class="form-inline">
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
                                <thead>
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
                                            <td>
                                            <button onclick="deletePatient({{ $patient->id }})" type="button"
                                                    class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <a href="{{ route('admin.patient.edit', $patient->id) }}" type="button"
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
            function deletePatient(id) {
                if (!confirm("Are you sure you want to delete this item?")) {
                    return; // user canceled
                }

                fetch(`/admin/patient/destroy/${id}`, {
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