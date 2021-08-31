@extends('auth.layout.app')
@section('form')
    <div class="login-form">
        <form action="{{ route('regsiterReq') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input class="au-input au-input--full" type="text" name="fname" placeholder="First Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="au-input au-input--full" type="text" name="lname" placeholder="Last Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Type Password">
                    </div>
                </div>
            </div>
            <div class="login-checkbox">
                <label>
                    <input type="checkbox" name="remember">Remember Me
                </label>
                <label>
                    <a href="#">Forgotten Password?</a>
                </label>
            </div>
            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Create Account</button>
        </form>
        <div class="register-link">
            <p>
                Don't you have account?
                <a href="#">Sign Up Here</a>
            </p>
        </div>
    </div>
@endsection
