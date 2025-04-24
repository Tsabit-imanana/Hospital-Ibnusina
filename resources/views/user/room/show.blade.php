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
                            @elseif ($room->status === 'unavailable')
                                <div class="badge badge-danger">Unavailable</div>
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

                        <a href="/appoinment" class="btn btn-main-2 btn-round-full">BOOK THIS ROOM<i
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

    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="assets/images/logo.png" alt="" class="img-fluid">
                        </div>
                        <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur
                            veritatis eveniet distinctio possimus.</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                        class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                        class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Department</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Surgery </a></li>
                            <li><a href="#">Wome's Health</a></li>
                            <li><a href="#">Radiology</a></li>
                            <li><a href="#">Cardioc</a></li>
                            <li><a href="#">Medicine</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Support</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Company Support </a></li>
                            <li><a href="#">FAQuestions</a></li>
                            <li><a href="#">Company Licence</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; Copyright Reserved to <span class="text-color">Novena</span> by <a
                                href="https://themefisher.com/" target="_blank">Themefisher</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control" placeholder="Your Email address">
                                <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
