@extends('admin.layouts.index')
@section('title', 'Add Hospital Cost')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-8 mx-auto">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4 class="box-title">Add New Hospital Cost</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.hospital-cost.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="patient_id" class="form-control-label">Patient Name</label>
                                <select id="patient_id" name="patient_id" class="form-control" required>
                                    <option value="" disabled selected>Select Patient</option>
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="health_patient" class="form-control-label">Health Patient</label>
                                <input type="text" id="health_patient" name="health_patient" placeholder="Enter health services (e.g., rongten, ct scan)" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="amount" class="form-control-label">Amount (Rp)</label>
                                <input type="number" id="amount" name="amount" placeholder="Enter amount" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('admin.hospital-cost.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
