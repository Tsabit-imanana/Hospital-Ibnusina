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
                    <a class="nav-link" href="{{ route('history') }}">
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
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Health Records</h4>
                                <table class="table table-bordered">
                                  <thead>
                                      <tr>
                                          <th style="width: 5%;"> No </th>
                                          <th style="width: 50%;"> Health Records </th>
                                          <th style="width: 25%;"> Price </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($healthRecords as $index => $record)
                                          <tr>
                                              <td>{{ $index + 1 }}</td>
                                              <td>
                                                @if (is_array($record->check_ups))
                                                    @foreach(array_keys($record->check_ups) as $checkUp)
                                                        <strong>{{ $checkUp }}</strong><br>
                                                    @endforeach
                                                @else
                                                    <span>Data tidak valid</span>
                                                @endif
                                            </td>
                                            
                                              <td>Rp. {{ number_format($record->total_price, 0, ',', '.') }}</td>
                                          </tr>
                                      @endforeach
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
                                      @php
                                      $index = 1; // Inisialisasi index di luar loop
                                      $grandtotal = 0; // Inisialisasi grandtotal
                                  @endphp
                                  
                                  @foreach ($healthRecords as $record)
                                      <tr>
                                          <td>{{ $index++ }}</td> <!-- Gunakan index yang incremented -->
                                          <td>
                                              @if (is_array($record->check_ups))
                                                  @foreach(array_keys($record->check_ups) as $checkUp)
                                                      <strong>{{ $checkUp }}</strong><br>
                                                  @endforeach
                                              @else
                                                  <span>Data tidak valid</span>
                                              @endif
                                          </td>
                                          <td>Rp. {{ number_format($record->total_price, 0, ',', '.') }}</td>
                                          @php
                                              $grandtotal += $record->total_price; // Tambahkan harga health record ke grandtotal
                                          @endphp
                                      </tr>
                                  @endforeach
                                  
                                  @foreach ($hospitalCosts as $record)
                                      <tr>
                                          <td>{{ $index++ }}</td> <!-- Lanjutkan dengan index yang sama -->
                                          <td>
                                              <strong>{{ $record->health_patient }}</strong>
                                          </td>
                                          <td>Rp. {{ number_format($record->amount, 0, ',', '.') }}</td>
                                          @php
                                              $grandtotal += $record->amount; // Tambahkan biaya rumah sakit ke grandtotal
                                          @endphp
                                      </tr>
                                  @endforeach
                                  
                                  @foreach ($rooms as $record)
                                      <tr>
                                          <td>{{ $index++ }}</td> <!-- Lanjutkan dengan index yang sama -->
                                          <td>
                                              <strong>Kamar{{ $record->type }}</strong>
                                          </td>
                                          <td>Rp. {{ number_format($record->price, 0, ',', '.') }}</td>
                                          @php
                                              $grandtotal += $record->price; // Tambahkan biaya room ke grandtotal
                                          @endphp
                                      </tr>
                                  @endforeach
                                  
                                  <tr>
                                      <td colspan="2"><strong>Total</strong></td>
                                      <td><strong>Rp. {{ number_format($grandtotal, 0, ',', '.') }}</strong></td> <!-- Tampilkan grandtotal -->
                                  </tr>
                                  
                                </table>
                                <div class="mt-3">
                                    
<!-- Tombol Bayar -->
                                    <a href="javascript:void(0);" id="payButton">
                                      <button type="submit" class="btn btn-gradient-primary me-2">Bayar</button>
                                    </a>

                                    <!-- Tambahkan script untuk menangani klik tombol -->
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                    <script>
                                      document.getElementById('payButton').addEventListener('click', function() {
                                          Swal.fire({
                                              title: 'Pembayaran Berhasil!',
                                              text: 'Pembayaran Anda telah berhasil dilakukan.',
                                              icon: 'success',
                                              confirmButtonText: 'OK'
                                          }).then((result) => {
                                              if (result.isConfirmed) {
                                                  // Redirect ke halaman setelah notifikasi
                                                  window.location.href = "{{ route('history-terbayar') }}"; 
                                              }
                                          });
                                      });
                                    </script>
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
        </div>
    </div>
@endsection
