<?php

use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/patient-list', function () {
    return view('admin/patient-list',[
        "tittle" => "Patient List"
    ]);
});
Route::get('/detail-rooms', function () {
    return view('admin/detail-rooms',[
        "tittle" => "Detail Rooms"
    ]);
});

Route::get('/admin/room', [RoomController::class, 'index'])->name('admin.room');

Route::get('/inpatient-list', function () {
    return view('admin/inpatient-list',[
        "tittle" => "Detail Rooms"
    ]);
});
Route::get('/health-records', function () {
    return view('admin/health-records',[
        "tittle" => "Health Records"
    ]);
});
Route::get('/hospital-cost', function () {
    return view('admin/hospital-cost',[
        "tittle" => "Hospital Cost"
    ]);
});

