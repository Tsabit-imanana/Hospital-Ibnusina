@extends('auth.layouts')
@section('title', 'Login')
@section('content')
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('assets-login/images/bg.png');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3><strong>LOG IN</strong></h3>
                        <p class="mb-4">Welcome to Ibnu Sina Hospital. Please enter your username and password to
                            continue.</p>
                        <form action="#" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" placeholder="Username" id="username">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Your Password" id="password">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>
                            <input type="submit" value="Log In" class="btn btn-block custom-btn">
                            <div class="text-center mt-3">
                                <hr>
                                <p class="mt-3">
                                    No account yet? <a href="/register" class="text-custom fw-bold">Register</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
