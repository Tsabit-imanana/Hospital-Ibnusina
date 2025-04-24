@extends('admin.layouts.index')
@section('title', "Edit Inpatient's Data")
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title">Edit Inpatient's Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.inpatient.update', $inpatient->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label>Nama Pasien</label>
                                <input type="text" name="name" class="form-control" value="{{ $inpatient->patient->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" class="form-control" value="{{ $inpatient->date_in }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Keluar</label>
                                <input type="date" name="date_out" class="form-control" value="{{ $inpatient->date_out }}">
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
@endsection
