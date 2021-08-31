@extends('auth.layout.app')
@section('form')
    <div class="login-form">
        <form action="{{ route('loginReq') }}" method="post">
            @csrf
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
            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Sign in</button>
        </form>
    </div>
@endsection
