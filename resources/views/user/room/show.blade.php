@extends('user.layouts.index')
@section('title', 'ROOM INFORMATION')
@section('container')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Room Details</span>
                        <h1 class="text-capitalize mb-5 text-lg">ROOM INFORMATION</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section department-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-img">
                        <img src="{{ asset('storage/' . $room->picture) }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="department-content mt-5">
                        <h3 class="text-md"></h3>
                        <div class="d-flex align-items-center">
                            @if ($room->status === 'available')
                                <div class="badge badge-success">Available</div>
                            @elseif ($room->status === 'notavailable')
                                <div class="badge badge-danger">Not available</div>
                            @endif
                        </div>
                        <div class="divider my-4"></div>
                        <p class="lead">Rp. {{ $room->priceFormat() }}/Day</p>
                        <p>The ultimate luxury and comfort for your optimal recovery. Enjoy exclusive facilities with
                            premium healthcare services.</p>


                        <h3 class="mt-5 mb-4">Facilities</h3>
                        <div class="divider my-4"></div>
                        <ul class="list-unstyled department-service">
                            @foreach ($room->facilities as $facility)
                                <li><i class="icofont-check mr-2"></i>{{ $facility }}</li>
                            @endforeach
                        </ul>

                        <a href="{{ route('room.appointment', $room->id) }}" class="btn rounded-pill" style="background-color: #e12454; color: white; border: none;">BOOK THIS ROOM<i
                                class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-widget schedule-widget mt-5">
                        <h5 class="mb-4">Visiting Hours</h5>

                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Afternoon</a>
                                <span>11:00 - 13:00 WIB</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <a href="#">Evening</a>
                                <span>17:00 - 20:00 WIB</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
