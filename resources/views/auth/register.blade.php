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
                    <form action="#" method="post">

                        <div class="form-group first">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" placeholder="Your Full Name" id="fullname">
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" placeholder="Your Address" id="address" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Choose a Username"
                                id="username">
                        </div>

                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Create a Password"
                                id="password">
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
