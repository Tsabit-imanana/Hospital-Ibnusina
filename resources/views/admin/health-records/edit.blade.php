@extends('admin.layouts.index')
@section('title', 'Edit Health Records')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title">Edit Health Record</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.health-record.update', $health_record_data->id) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label>Patient</label>
                                <select class="form-control" disabled>
                                    <option selected disabled>{{ $health_record_data->patient->name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Room</label>
                                <select class="form-control" disabled>
                                    <option selected disabled>{{ $health_record_data->room->type }}</option>
                                </select>
                            </div>
                            <div id="records-wrapper">
                                <div class="row">
                                    <div class="col-md-4">
                                        Health Records:
                                    </div>
                                    <div class="col-md-4">
                                        Price:
                                    </div>
                                </div>
                                @foreach ($health_record_data->check_ups ?? [] as $health_record => $price)
                                    <div class="row records-row mb-2">
                                        <div class="col-md-4">
                                            <input type="text" name="records[health_record][]"
                                                value="{{ $health_record }}" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" name="records[price][]" value="{{ $price }}"
                                                class="form-control">
                                        </div>
                                        <button type="button" class="btn btn-danger remove-record">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" id="add-records">Add More</button>
                            <br>
                            <button type="submit" class="btn btn-success mt-3">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('add-records').addEventListener('click', function() {
                const wrapper = document.getElementById('records-wrapper');

                const div = document.createElement('div');
                div.classList.add('records-row');
                div.innerHTML = `
                                <div class="row records-row mb-2">
                                    <div class="col-md-4">
                                        <input type="text" name="records[health_record][]" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="records[price][]" class="form-control">
                                    </div>
                                    <button type="button" class="btn btn-danger remove-record">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                `;
                wrapper.appendChild(div);
            });

            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-record')) {
                    e.target.parentElement.remove();
                }
            });
        </script>
    @endpush
@endsection
