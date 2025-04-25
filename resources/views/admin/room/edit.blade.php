@extends('admin.layouts.index')
@section('title', 'Edit Room')
@section('content')
    @php
        $roomStatus = ['available', 'unavailable'];
    @endphp

    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title">Add New Room</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.room.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label>Room Type</label>
                                <input type="text" name="type" value="{{ $room->type }}" class="form-control"
                                    placeholder="Masukkan tipe kamar">
                            </div>
                            <div id="facility-wrapper">
                                <label>Fasilitas</label>
                                @foreach ($room->facilities as $facility)
                                    <div class="input-group mb-2">
                                        <input type="text" name="facilities[]" class="form-control"
                                            value="{{ $facility }}">
                                        <button type="button" class="btn btn-danger remove-input">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" id="add-input">Add More</button>

                            <div class="form-group mt-3">
                                <label for="price">Price (per day)</label>
                                <input type="number" name='price' value="{{ $room->price }}" class="form-control"
                                    placeholder="Contoh: 500000">
                            </div>
                            <div class="form-group mt-3">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    @foreach ($roomStatus as $status)
                                    <option value="{{ $status }}" {{ old('status', $room->status) == $status ? 'selected' : '' }}>
                                        {{ ucfirst($status) }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label>Foto Kamar</label>
                                <input type="file" name="picture" id="pictureInput" class="form-control-file"
                                    accept="image/*">
                                <img id="previewImage" src="{{ $room->picture ? asset('storage/' . $room->picture) : '#' }}"
                                    alt="Image Preview"
                                    style="{{ $room->picture ? '' : 'display:none;' }} max-width: 200px; margin-top: 10px;">
                            </div>
                            <button type="submit" class="btn btn-success">
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
            document.getElementById('add-facility').addEventListener('click', function() {
                const wrapper = document.getElementById('facility-wrapper');
                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'facilities[]';
                wrapper.insertBefore(input, this); // insert before the button
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#add-input').click(function() {
                    const newInput = `
        <div class="input-group mb-2">
            <input type="text" name="facilities[]" class="form-control" placeholder="Enter item">
            <button type="button" class="btn btn-danger remove-input"><i class="fa fa-trash"></i></button>
        </div>
    `;
                    $('#facility-wrapper').append(newInput);
                });

                // Remove specific input group
                $(document).on('click', '.remove-input', function() {
                    $(this).closest('.input-group').remove();
                });
            });
        </script>

        <script>
            document.getElementById('pictureInput').addEventListener('change', function(event) {
                const preview = document.getElementById('previewImage');
                const file = event.target.files[0];

                if (file) {
                    preview.src = URL.createObjectURL(file);
                    preview.style.display = 'block';
                } else {
                    preview.style.display = 'none';
                }
            });
        </script>
    @endpush
@endsection
