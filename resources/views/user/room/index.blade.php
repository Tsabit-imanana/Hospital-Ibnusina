@extends('user.layouts.index')
@section('title', 'OUR ROOMS')
@section('container')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg">OUR ROOMS</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Reservation & Patient Services</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Need an inpatient room? Check room availability and make a reservation easily through our
                            website. We are ready to serve you 24/7.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($rooms as $room)
                    <div class="col-lg-4 col-md-6 ">
                        <div class="department-block mb-5">
                            <img src="{{ asset('storage/' . $room->picture) }}" alt="" class="img-fluid w-100">
                            <div class="content">
                                <h4 class="mt-4 mb-2 title-color">{{ $room->type }}</h4>
                                <p class="mb-4">Luxury and premium service with exclusive facilities.</p>
                                <a href="{{ route('room.show', $room->id) }}" class="btn rounded-pill" style="background-color: #e12454; color: white; border: none;"class="read-more">Learn More
                                    <i class="icofont-simple-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
