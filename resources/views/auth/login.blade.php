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
                        <form method="POST" action="{{ route('authenticate') }}">
                            @csrf
                            <div class="form-group first">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
                            </div>

                            <div class="d-flex mb-3 align-items-center">
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>
                            {{-- <input type="submit" value="Log In" class="btn btn-block custom-btn"> --}}
                            <button type="submit" class="btn btn-block custom-btn">Log In</button>
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
