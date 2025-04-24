@extends('auth.layouts')
@section('title', 'Register')
@section('content')
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('assets-login/images/bg.png');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3><strong>REGISTER</strong></h3>
                        <p class="mb-4">Create your account to access Ibnu Sina Hospital services.</p>
                        <form action="{{ route('registration.register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group first">
                                <label for="fullname">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Full Name">
                            </div>

                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="birthdate" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" placeholder="Your Address" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <select class="form-select" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Choose a Username">
                            </div>

                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Create a Password">
                            </div>

                            <div class="form-group last mb-3">
                                <label for="password">Password Confirmation</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Repeat Password">
                            </div>

                            <input type="submit" value="Register" class="btn btn-block custom-btn">

                            <div class="text-center mt-3">
                                <hr>
                                <p class="mt-3">
                                    Already have an account? <a href="/login" class="text-custom fw-bold">Log In</a>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
