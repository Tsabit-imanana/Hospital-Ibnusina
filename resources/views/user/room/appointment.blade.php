@extends('user.layouts.index')
@section('title', 'BOOK ROOM')
@section('container')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Book your Room</span>
                        <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- SECTION: Appointment -->
<section class="appoinment section">
    <div class="container">
        <div class="row">
            <!-- Kontak Emergency -->
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3">Call for an Emergency Service!</span>
                    <h2 class="text-color mt-3">(0353) 883238 </h2>
                </div>
            </div>

            <!-- Form Booking -->
            <div class="col-lg-8">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Book an appointment</h2>
                    <p class="mb-4">
                        Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit. Iste dolorum atque similique praesentium soluta.
                    </p>
                    <form id="appointmentForm" class="appoinment-form" action="{{ route('room.bookAppointment', $room->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                        <input id="dateInput" name="date_in" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol pemicu modal -->
                        @if(Auth::guard('patient')->check())
                            <!-- Sudah login sebagai pasien -->
                            <button type="button" class="btn rounded-pill" style="background-color: #223a66; color: white; border: none;" style="border-color: black" data-toggle="modal" data-target="#confirmationModal">
                                Make Appointment
                                <i class="icofont-simple-right ml-2"></i>
                            </button>
                        @else
                            <!-- Belum login, arahkan ke halaman login -->
                            <a href="{{ route('login') }}" class="btn btn-main btn-round-full" style="border-color: black">
                                Login to Make Appointment
                                <i class="icofont-simple-right ml-2"></i>
                            </a>
                        @endif


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODAL KONFIRMASI -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow-lg rounded">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="confirmationModalLabel">
          <i class="icofont-ui-calendar mr-2"></i> Konfirmasi Appointment
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body px-4 py-3">
        <div class="mb-3">
          <h6 class="mb-2 text-muted">Detail Pasien</h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item px-0 py-1"><strong>Nama:</strong> {{ Auth::guard('patient')->user()->name }}</li>
            <li class="list-group-item px-0 py-1"><strong>Gender:</strong> {{ Auth::guard('patient')->user()->gender }}</li>
            <li class="list-group-item px-0 py-1"><strong>Ruangan:</strong> {{ $room->type }}</li>
          </ul>
        </div>

        <div class="mt-4">
          <h6 class="mb-2 text-muted">Tanggal Appointment</h6>
          <h5 class="text-primary"><i class="icofont-calendar mr-2"></i><span id="selectedDate">-</span></h5>
        </div>

        <p class="mt-4 mb-0">Apakah Anda yakin ingin melanjutkan proses appointment ini?</p>
      </div>

      <div class="modal-footer border-0 px-4 pb-4">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
          <i class="icofont-close-circled mr-1"></i> Batal
        </button>
        <button type="button" class="btn btn-primary" onclick="submitAppointment()">
          <i class="icofont-check-circled mr-1"></i> Ya, Konfirmasi
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- SCRIPT KONFIRMASI -->
<script>
  // Saat tombol pemicu modal diklik
  document.querySelector('[data-target="#confirmationModal"]').addEventListener('click', function () {
    const dateValue = document.getElementById('dateInput').value;
    const displayDate = dateValue ? new Date(dateValue).toLocaleDateString('id-ID', {
      day: 'numeric', month: 'long', year: 'numeric'
    }) : 'Belum dipilih';

    document.getElementById('selectedDate').textContent = displayDate;
  });

  function submitAppointment() {
    document.getElementById('appointmentForm').submit();
  }
</script>


<!-- Tambahkan ini jika Bootstrap/jQuery belum di-include -->
<!-- BOOTSTRAP & JQUERY -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection