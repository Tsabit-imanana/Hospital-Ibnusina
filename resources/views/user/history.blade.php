@extends('user.layouts.index')
@section('title', 'Patient History')
@section('container')

@php
use Carbon\Carbon; 
@endphp


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
</style>

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
                                    @php $rowNumber = 1; @endphp
                                    @foreach ($healthRecords as $record)
                                        @if (is_array($record->check_ups) && count($record->check_ups) > 0)
                                            @php
                                                $checkUpCount = count($record->check_ups);
                                                $averagePrice = $record->total_price / $checkUpCount;
                                            @endphp
                                            @foreach(array_keys($record->check_ups) as $checkUp)
                                                <tr>
                                                    <td>{{ $rowNumber++ }}</td>
                                                    <td><strong>{{ $checkUp }}</strong></td>
                                                    <td>Rp. {{ number_format($averagePrice, 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td>{{ $rowNumber++ }}</td>
                                                <td><span>Data tidak valid</span></td>
                                                <td>Rp. {{ number_format($record->total_price, 0, ',', '.') }}</td>
                                            </tr>
                                        @endif
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
                                        
                                        $grandtotal = 0;
                                    @endphp
                                    @foreach ($hospitalCosts as $record)
                                    @php
                                    $index = 1;
                                    $grandtotal += $record->amount;
                                    @endphp
                                        <tr>
                                            <td>{{ $index++ }}</td>
                                            <td><strong>{{ $record->health_patient }}</strong></td>
                                            <td>Rp. {{ number_format($record->amount, 0, ',', '.') }}</td>
                                        </tr>
                                    @endforeach

                                    <!-- Inpatient Costs -->
                                    @foreach ($inpatients as $inpatient)
                                    @php
                                    $days = Carbon::parse($inpatient->date_out)->diffInDays(Carbon::parse($inpatient->date_in));
                                    $roomPrice = $inpatient->room->price;
                                        $subtotal = $roomPrice * $days;
                                        $grandtotal += $inpatient->total_price;
                                    @endphp
                                        <tr>
                                            <td>{{ $index++ }}</td>
                                            <td><strong>Kamar {{ $inpatient->room->type }}</strong></td>
                                            <td>Rp. {{ number_format($inpatient->total_price, 0, ',', '.') }}</td>
                                            <!-- <td>{{ $days }} hari</td>
                                            <td>Rp. {{ number_format($subtotal, 0, ',', '.') }}</td> -->
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="2"><strong>Total</strong></td>
                                        <td><strong>Rp. {{ number_format($grandtotal, 0, ',', '.') }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="mt-3">
                                <!-- Tombol Bayar -->
                                    <button type="button" id="payButton" class="btn btn-gradient-primary me-2">Pay</button>

                                <!-- Script untuk menangani klik tombol -->
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
    </div>
@endsection
