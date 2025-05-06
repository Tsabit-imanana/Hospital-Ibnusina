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
                        <h1 class="text-capitalize mb-5 text-lg">Reservation</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="appoinment section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="feature-icon mb-3">
                            <i class="icofont-support text-lg"></i>
                        </div>
                        <span class="h3">Call for an Emergency Service!</span>
                        <h2 class="text-color mt-3">(0353) 883238 </h2>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                        <h2 class="mb-2 title-color">Book an Reservation</h2>
                        <p class="mb-4">
                        Find the perfect stay that suits your needs. Choose your preferred room type, select your check-in and check-out dates, and complete your booking easily and quickly. We offer a variety of comfortable rooms with complete facilities and top-notch service to ensure a pleasant and memorable stay.
                        </p>
                        <form class="appoinment-form" action="{{ route('room.bookAppointment', $room->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="date_in" type="date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn rounded-pill" style="background-color: #223a66; color: white; border: none;" style="border-color: black">
                                Make Appoinment
                                <i class="icofont-simple-right ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
