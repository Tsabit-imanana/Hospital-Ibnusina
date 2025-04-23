@extends('admin.layouts.index')
@section('title', 'Edit Room')
@section('content')
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <!-- Add Room Form -->
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
                                <input type="text" name="type" class="form-control" placeholder="Masukkan tipe kamar">
                            </div>
                            <div id="input-wrapper">
                                <label>Fasilitas</label>
                                <div class="input-group mb-2">
                                    <input type="text" name="facilities[]" class="form-control" placeholder="Enter item">
                                    <button type="button" class="btn btn-danger remove-input"><i
                                            class="fa fa-trash"></i></button>
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
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label>Foto Kamar</label>
                                <input type="file" name="picture" class="form-control-file" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </form>
                    </div>
                </div> <!-- /.card -->
            </div>
            <!-- /#add-room-form -->
        </div>
        <!-- .animated -->
    </div>
@endsection
