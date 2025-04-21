@extends('user.layouts.index')
@section('title', 'Patient History')
@section('container')
    <div class="page-body-wrapper">
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
                            <span class="font-weight-bold mb-2">{{ $profile->name }}</span>
                            <span class="text-secondary text-small">Pasient</span>
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
                    <a class="nav-link" href="{{ route('history') }}" href="#tables" aria-expanded="false"
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
                <h3 class="page-title" style="padding: 40px 0px 50px 0px;">
                  <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-file-document"></i>
                  </span> History
                </h3>
                <nav aria-label="breadcrumb">
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Health Records</h4>
                      </p>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 5%;"> No </th>
                            <th style="width: 50%;"> Health Records </th>
                            <th style="width: 25%;"> Price </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> General Practitioner Consultation </td>
                            <td> Rp. 300,000 </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> Specialist Doctor Consultation </td>
                            <td> Rp. 550,000 </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> Laboratory Tests </td>
                            <td> Rp. 370,000 </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> CT Scan </td>
                            <td> Rp. 1,000,000 </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Ultrasound (USG) </td>
                            <td> Rp. 800,000 </td>
                          </tr>
                          <tr>
                            <td> 6 </td>
                            <td> Electrocardiogram (ECG) </td>
                            <td> Rp. 400,000 </td>
                          </tr>
                          <tr>
                            <td> 7 </td>
                            <td> Biopsy </td>
                            <td> Rp. 2,500,000 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Total Price Patient</h4>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 5%;"> No </th>
                            <th style="width: 50%;"> History Patient </th>
                            <th style="width: 25%;"> Amount </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Hospital Administration </td>
                            <td> Rp. 200,000 </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> Inpatient Registration </td>
                            <td> Rp. 250,000 </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> Inpatient Room Fees </td>
                            <td> Rp. 3,750,00 </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> Medical Examinations & Procedures Fees </td>
                            <td> Rp. 5,920,000 </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Medications </td>
                            <td> Rp. 1,750,000 </td>
                          </tr>
                          <tr>
                            <td> 6 </td>
                            <td> IV Drip </td>
                            <td> Rp. 500,000 </td>
                          </tr>
                          <tr>
                            <td> 7 </td>
                            <td> Medical Procedures </td>
                            <td> Rp. 735,000 </td>
                          </tr>
                          <tr>
                            <td colspan="2"><strong>Total</strong></td>
                            <td><strong>Rp. 13,105,000</strong></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="mt-3">
                        <button type="submit" class="btn btn-gradient-primary me-2">Pay</button>
                        <button class="btn btn-light">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
              </div>
            </footer>
            <!-- partial -->
          </div>
    </div>
@endsection
