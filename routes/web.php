<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HealthRecordsController;
use App\Http\Controllers\Admin\HospitalCostController;
use App\Http\Controllers\Admin\InpatientController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/home',[
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('user/about',[
        "tittle" => "About"
    ]);
});

Route::get('/service', function () {
    return view('user/service',[
        "tittle" => "Service"
    ]);
});

Route::get('/room', function () {
    return view('user/room',[
        "tittle" => "Room"
    ]);
});

Route::get('/doctors', function () {
    return view('user/doctors',[
        "tittle" => "Doctors"
    ]);
});

Route::get('/doctorssingle', function () {
    return view('user/doctorssingle',[
        "tittle" => "Doctors Single"
    ]);
});

Route::get('/appoinment', function () {
    return view('user/appoinment',[
        "tittle" => "Appoinment"
    ]);
});

Route::get('/room-vvip', function () {
    return view('user/room-vvip',[
        "tittle" => "Room VVIP"
    ]);
});

Route::get('/room-vip', function () {
    return view('user/room-vip',[
        "tittle" => "Room-VIP"
    ]);
});

Route::get('/room-utama', function () {
    return view('user/room-utama',[
        "tittle" => "Room Utama"
    ]);
});

Route::get('/room-kelas1', function () {
    return view('user/room-kelas1',[
        "tittle" => "Room Kelas 1"
    ]);
});

Route::get('/appoinment', function () {
    return view('user/appoinment',[
        "tittle" => "Appoinment"
    ]);
});

Route::get('/login', function () {
    return view('auth/login',[
        "tittle" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('auth/register',[
        "tittle" => "Register"
    ]);
});

Route::get('/profile', function () {
    return view('user/profile',[
        "tittle" => "Profile"
    ]);
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/patient', [PatientController::class, 'index'])->name('admin.patient.index');

Route::get('/admin/room', [RoomController::class, 'index'])->name('admin.room.index');

Route::get('/admin/inpatient', [InpatientController::class, 'index'])->name('admin.inpatient.index');

Route::get('/admin/health-records', [HealthRecordsController::class, 'index'])->name('admin.health-record.index');

Route::get('/admin/hospital-cost', [HospitalCostController::class, 'index'])->name('admin.hospital-cost.index');

