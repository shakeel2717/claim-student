@extends('auth.layout.app')
@section('form')
    <div class="login-form">
        <form action="{{ route('adminloginReq') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Admin Username</label>
                        <input class="au-input au-input--full" type="username" name="username" placeholder="Username">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Admin Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Type Password">
                    </div>
                </div>
            </div>
            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Sign in</button>
            <div class="footer-card text-center">
                <a href="{{ route('register') }}">Sign up</a>
            </div>
        </form>
    </div>
@endsection
