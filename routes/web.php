<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HealthRecordsController;
use App\Http\Controllers\Admin\HospitalCostController;
use App\Http\Controllers\Admin\InpatientController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Patient\ProfileController as PatientProfileController;
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

Route::get('/room', function () {
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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
});


Route::middleware(['auth:patient', 'role:patient'])->group(function () {
    Route::get('/profile', [PatientProfileController::class, 'index'])->name('profile');
    Route::get('/history', [PatientProfileController::class, 'history'])->name('history');
});

Route::middleware(['auth:admin', 'role:admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');

    Route::get('/room', [RoomController::class, 'index'])->name('room.index');
    Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
    Route::post('/room/store', [RoomController::class, 'store'])->name('room.store');

    Route::get('/inpatient', [InpatientController::class, 'index'])->name('inpatient.index');

    Route::get('/health-records', [HealthRecordsController::class, 'index'])->name('health-record.index');

    Route::get('/hospital-cost', [HospitalCostController::class, 'index'])->name('hospital-cost.index');
});

Route::middleware(['auth.session'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
