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
                        <h4 class="box-title mb-0">List Rooms</h4>

                        <div class="d-flex align-items-center" style="gap: 10px;">
                            <form action="{{ route('admin.room.index') }}" method="GET" class="d-flex">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    class="form-control form-control-sm" placeholder="Search rooms...">
                                <button type="submit" class="btn btn-sm btn-primary ms-2"><i
                                        class="fa fa-search"></i></button>
                            </form>
                            <a href="{{ route('admin.room.create') }}" class="btn btn-sm btn-success text-white">
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
                                                @elseif ($room->status == 'notavailable')
                                                    <span class="badge badge-danger">{{ $room->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button onclick="deleteRoom({{ $room->id }})" type="button"
                                                    class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <a href="{{ route('admin.room.edit', $room->id) }}" type="button"
                                                    class="btn btn-warning">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                            {{-- <td>
                                                <img src="{{ asset('storage/'.$room->picture) }}" alt="">
                                            </td> --}}
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
            function deleteRoom(id) {
                if (!confirm("Are you sure you want to delete this item?")) {
                    return; // user canceled
                }

                fetch(`/admin/room/destroy/${id}`, {
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