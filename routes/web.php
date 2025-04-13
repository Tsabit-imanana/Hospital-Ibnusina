<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('User/Home',[
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('User/About',[
        "tittle" => "About"
    ]);
});

Route::get('/service', function () {
    return view('User/Service',[
        "tittle" => "Service"
    ]);
});

Route::get('/room', function () {
    return view('User/Room',[
        "tittle" => "Room"
    ]);
});

Route::get('/doctors', function () {
    return view('User/Doctors',[
        "tittle" => "Doctors"
    ]);
});

Route::get('/doctorssingle', function () {
    return view('User/Doctorssingle',[
        "tittle" => "Doctors Single"
    ]);
});

Route::get('/appoinment', function () {
    return view('User/Appoinment',[
        "tittle" => "Appoinment"
    ]);
});

Route::get('/room-vvip', function () {
    return view('User/Room-vvip',[
        "tittle" => "Room VVIP"
    ]);
});

Route::get('/room-vip', function () {
    return view('User/Room-vip',[
        "tittle" => "Room-VIP"
    ]);
});

Route::get('/room-utama', function () {
    return view('User/Room-utama',[
        "tittle" => "Room Utama"
    ]);
});

Route::get('/room-kelas1', function () {
    return view('User/Room-kelas1',[
        "tittle" => "Room Kelas 1"
    ]);
});

Route::get('/appoinment', function () {
    return view('User/Appoinment',[
        "tittle" => "Appoinment"
    ]);
});

Route::get('/login', function () {
    return view('Auth/Login',[
        "tittle" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('Auth/Register',[
        "tittle" => "Register"
    ]);
});

Route::get('/profile', function () {
    return view('User/Profile',[
        "tittle" => "Profile"
    ]);
});

Route::get('/dashboard', function () {
    return view('Admin/Dashboard',[
        "tittle" => "Dashboard"
    ]);
});
Route::get('/patient-list', function () {
    return view('admin/Patient-List',[
        "tittle" => "Patient List"
    ]);
});
Route::get('/detail-rooms', function () {
    return view('admin/Detail-Rooms',[
        "tittle" => "Detail Rooms"
    ]);
});
Route::get('/inpatient-list', function () {
    return view('admin/Inpatient-List',[
        "tittle" => "Detail Rooms"
    ]);
});
Route::get('/health-records', function () {
    return view('admin/Health-Records',[
        "tittle" => "Health Records"
    ]);
});
Route::get('/hospital-cost', function () {
    return view('admin/Hospital-Cost',[
        "tittle" => "Hospital Cost"
    ]);
});

