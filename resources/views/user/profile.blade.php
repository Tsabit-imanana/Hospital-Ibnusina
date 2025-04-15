@extends('user.layouts.index')
@section('container')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="assets-profile/images/faces/jennie.jpg" alt="profile" />
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">Jennie Kim</span>
                            <span class="text-secondary text-small">Pasient</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <span class="menu-title">Profile</span>
                        <i class="mdi mdi-account-outline menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html" href="#tables" aria-expanded="false"
                        aria-controls="tables">
                        <span class="menu-title">History</span>
                        <i class="mdi mdi-file-document menu-icon"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-account-outline"></i>
                        </span> Profile
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">

                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row g-0">
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="assets-profile/images/dashboard/circle.svg" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Hai, Jennie <i
                                        class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                                </h4>
                                <h2 class="mb-5">Welcome to Your Profile</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Profile Patient</h4>
                                <form class="form-sample">
                                    <p class="card-description">Personal Info</p>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row g-3 mt-2">
                                        <div class="col-md-6">
                                            <label>Gender</label>
                                            <select class="form-select">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Date of Birth</label>
                                            <input class="form-control" placeholder="dd/mm/yyyy" />
                                        </div>
                                    </div>

                                    <p class="card-description mt-4">Address</p>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label>Address 1</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>State</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row g-3 mt-2">
                                        <div class="col-md-6">
                                            <label>City</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Country</label>
                                            <select class="form-select">
                                                <option>Indonesia</option>
                                                <option>Singapore</option>
                                                <option>Malaysia</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="text-end mt-4">
                                        <button type="submit" class="btn btn-gradient-primary">Edit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a
                                    href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights
                                reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                                with <i class="mdi mdi-heart text-danger"></i></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    @endsection
