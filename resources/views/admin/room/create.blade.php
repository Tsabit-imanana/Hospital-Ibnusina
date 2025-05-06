@extends('admin.layouts.index')
@section('title', 'Create Room')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title">Add New Room</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Room Type</label>
                                <input type="text" name="type" class="form-acontrol" placeholder="Masukkan tipe kamar">
                            </div>
                            <div id="input-wrapper">
                                <label>Fasilitas</label>
                                <div class="input-group mb-2">
                                    <input type="text" name="facilities[]" class="form-control" placeholder="Enter item">
                                    <button type="button" class="btn btn-danger remove-input">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" id="add-input">Add More</button>

                            <div class="form-group mt-3">
                                <label for="price">Price (per day)</label>
                                <input type="number" name='price' class="form-control" placeholder="Contoh: 500000">
                            </div>
                            <div class="form-group mt-3">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option selected disabled>Pilih Status</option>
                                    <option value="available">Available</option>
                                    <option value="notavailable">Not available</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="caption">Caption</label>
                                <textarea name="caption" class="form-control" rows="3"
                                    placeholder="Tambahkan caption kamar di sini"></textarea>
                            </div>

                            <div class="form-group mt-3">
                                <label>Foto Kamar</label>
                                <input type="file" id="pictureInput" name="picture" class="form-control-file"
                                    accept="image/*">
                                <img id="previewImage" src="#" alt="Image Preview"
                                    style="display: none; max-width: 200px; margin-top: 10px;">
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
            $(document).ready(function () {
                $('#add-input').click(function () {
                    const newInput = `
                        <div class="input-group mb-2">
                            <input type="text" name="facilities[]" class="form-control" placeholder="Enter item">
                            <button type="button" class="btn btn-danger remove-input"><i class="fa fa-trash"></i></button>
                        </div>
                    `;
                    $('#input-wrapper').append(newInput);
                });

                // Remove specific input group
                $(document).on('click', '.remove-input', function () {
                    $(this).closest('.input-group').remove();
                });
            });
        </script>

        <script>
            document.getElementById('pictureInput').addEventListener('change', function (event) {
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