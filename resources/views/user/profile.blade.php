@extends('user.layouts.index')
@section('title', 'Profile')
@section('container')
<style>
        /* Memberikan background biru pada halaman */
    

        /* Membuat main-panel fullheight */
        .main-panel {
            background-color: #ffffff; /* Latar belakang putih untuk main-panel */
            height: 100vh; /* Membuat elemen main-panel mengambil 100% dari tinggi layar */
            display: flex;
            flex-direction: column;
        }

        /* Memberikan style untuk area content-wrapper */
        .content-wrapper {
            flex-grow: 1; /* Membuat konten panel mengambil sisa ruang yang tersedia */
            padding: 20px;
        }

        /* Style tambahan untuk header jika diperlukan */
        
    </style>
    <div class="page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="assets-profile/images/faces/jennie.jpg" alt="profile" />
                            <span class="login-status online"></span>
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">{{ $profile->name }}</span>
                            <span class="text-secondary text-small">Patient</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">
                        <span class="menu-title">Profile</span>
                        <i class="mdi mdi-account-outline menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('history') }}" href="#tables" aria-expanded="false" aria-controls="tables">
                        <span class="menu-title">History</span>
                        <i class="mdi mdi-file-document menu-icon"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title" style="padding: 40px 0px 50px 0px;">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-account-outline"></i>
                        </span> Profile
                    </h3>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="assets-profile/images/dashboard/circle.svg" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">
                                    Hai, {{ $profile->name }}
                                    <i class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                                </h4>
                                <h2 class="mb-5">Welcome to Your Profile</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Profile Patient</h4>
                                <form class="form-sample" action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <p class="card-description">Personal Info</p>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $profile->name }}"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Birthdate</label>
                                            <input type="text" name="birthdate" class="form-control" value="{{ $profile->age() }}" disabled/>
                                        </div>
                                    </div>

                                    <div class="row g-3 mt-2">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input class="form-control" type="text" name="address" value="{{ $profile->address }}"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Date of Birth</label>
                                            <input class="form-control" type="date" name="birthdate" value="{{ $profile->birthdate }}"/>
                                        </div>
                                    </div>

                                    <div class="text-end mt-4">
                                        <button type="submit" class="btn btn-gradient-primary">Update</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
