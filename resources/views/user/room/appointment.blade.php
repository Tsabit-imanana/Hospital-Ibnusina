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

    <section class="appoinment section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="feature-icon mb-3">
                            <i class="icofont-support text-lg"></i>
                        </div>
                        <span class="h3">Call for an Emergency Service!</span>
                        <h2 class="text-color mt-3">+84 789 1256 </h2>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                        <h2 class="mb-2 title-color">Book an appoinment</h2>
                        <p class="mb-4">
                            Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.
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

                            <button type="submit" class="btn btn-main btn-round-full" style="border-color: black">
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
