<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HealthRecordsController;
use App\Http\Controllers\Admin\HospitalCostController;
use App\Http\Controllers\Admin\InpatientController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Patient\ProfileController as PatientProfileController;
use App\Http\Controllers\Patient\RoomController as PatientRoomController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('user/about', [
        "tittle" => "About"
    ]);
});

Route::get('/service', function () {
    return view('user/service', [
        "tittle" => "Service"
    ]);
});

Route::get('/draft/room', function () {
    return view('user/room', [
        "tittle" => "Room"
    ]);
});

Route::get('/doctors', function () {
    return view('user/doctors', [
        "tittle" => "Doctors"
    ]);
});

Route::get('/doctorssingle', function () {
    return view('user/doctorssingle', [
        "tittle" => "Doctors Single"
    ]);
});

Route::get('/appoinment', function () {
    return view('user/appoinment', [
        "tittle" => "Appoinment"
    ]);
});

Route::get('/room-vvip', function () {
    return view('user/room-vvip', [
        "tittle" => "Room VVIP"
    ]);
});

Route::get('/room-vip', function () {
    return view('user/room-vip', [
        "tittle" => "Room-VIP"
    ]);
});

Route::get('/room-utama', function () {
    return view('user/room-utama', [
        "tittle" => "Room Utama"
    ]);
});

Route::get('/room-kelas1', function () {
    return view('user/room-kelas1', [
        "tittle" => "Room Kelas 1"
    ]);
});

Route::get('/appoinment', function () {
    return view('user/appoinment', [
        "tittle" => "Appoinment"
    ]);
});

Route::get('/room', [PatientRoomController::class, 'index'])->name('room');
Route::get('/room/{id}', [PatientRoomController::class, 'show'])->name('room.show');
Route::get('/room/{id}/appointment', [PatientRoomController::class, 'appointment'])->name('room.appointment');

Route::middleware(['web', 'guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

    Route::get('/registration', [RegisterController::class, 'index'])->name('registration.index');
    Route::post('/registration/register', [RegisterController::class, 'register'])->name('registration.register');
});



Route::middleware(['auth:patient', 'role:patient'])->group(function () {
    Route::get('/profile', [PatientProfileController::class, 'index'])->name('profile');
    Route::get('/history', [PatientProfileController::class, 'history'])->name('history');
    Route::get('/history-terbayar', action: [PatientProfileController::class, 'terbayar'])->name('history-terbayar');

    Route::put('/profile/{id}', [PatientProfileController::class, 'update'])->name('profile.update');

    Route::post('/room/{id}/book-appointment', [PatientRoomController::class, 'bookAppointment'])->name('room.bookAppointment');
});

Route::middleware(['auth:admin', 'role:admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
    Route::put('/patient/update/{id}', [PatientController::class, 'update'])->name('patient.update');
    Route::delete('/patient/destroy/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');

    Route::get('/room', [RoomController::class, 'index'])->name('room.index');
    Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
    Route::post('/room/store', [RoomController::class, 'store'])->name('room.store');
    Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
    Route::put('/room/update/{id}', [RoomController::class, 'update'])->name('room.update');
    Route::delete('/room/destroy/{id}', [RoomController::class, 'destroy'])->name('room.destroy');

    Route::get('/inpatient', [InpatientController::class, 'index'])->name('inpatient.index');
    Route::get('/inpatient/edit/{id}', [InpatientController::class, 'edit'])->name('inpatient.edit');
    Route::put('/inpatient/update/{id}', [InpatientController::class, 'update'])->name('inpatient.update');
    Route::delete('/inpatient/destroy/{id}', [InpatientController::class, 'destroy'])->name('inpatient.destroy');

    Route::get('/health-records', [HealthRecordsController::class, 'index'])->name('health-record.index');
    Route::get('/health-records/create', [HealthRecordsController::class, 'create'])->name('health-record.create');
    Route::post('/health-records/store', [HealthRecordsController::class, 'store'])->name('health-record.store');
    Route::get('/health-records/edit/{id}', [HealthRecordsController::class, 'edit'])->name('health-record.edit');
    Route::put('/health-records/update/{id}', [HealthRecordsController::class, 'update'])->name('health-record.update');
    Route::delete('/health-records/destroy/{id}', [HealthRecordsController::class, 'destroy'])->name('health-record.destroy');

    Route::get('/hospital-cost', [HospitalCostController::class, 'index'])->name('hospital-cost.index');
    Route::get('/hospital-cost/create', [HospitalCostController::class, 'create'])->name('hospital-cost.create');
    Route::post('/hospital-cost/store', [HospitalCostController::class, 'store'])->name('hospital-cost.store');
    Route::get('admin/hospital-cost/{id}/edit', [HospitalCostController::class, 'edit'])->name('hospital-cost.edit');
    Route::put('admin/hospital-cost/{id}', [HospitalCostController::class, 'update'])->name('hospital-cost.update');
    Route::delete('admin/hospital-cost/{id}', [HospitalCostController::class, 'destroy'])->name('hospital-cost.destroy');

    
});

Route::middleware(['auth.session'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
