@extends('admin.layouts.index')
@section('title', 'Edit Hospital Cost')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="clearfix"></div>
            <div class="col-xl-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4>Edit Hospital Cost</h4>
                        <form action="{{ route('admin.hospital-cost.update', $hospitalCost->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="patient_id" class="form-control-label">Patient Name</label>
                                <select id="patient_id" name="patient_id" class="form-control" required>
                                    <option value="" disabled>Select Patient</option>
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient->id }}" 
                                            {{ $hospitalCost->patient_id == $patient->id ? 'selected' : '' }}>
                                            {{ $patient->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="health_patient" class="form-control-label">Health Patient</label>
                                <input type="text" id="health_patient" name="health_patient" value="{{ $hospitalCost->health_patient }}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="amount" class="form-control-label">Amount (Rp)</label>
                                <input type="number" id="amount" name="amount" value="{{ $hospitalCost->amount }}" class="form-control" required>
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
