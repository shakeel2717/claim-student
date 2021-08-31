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
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Father Name</label>
                        <input class="au-input au-input--full" type="text" name="father" placeholder="Father Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mobile</label>
                        <input class="au-input au-input--full" type="text" name="mobile" placeholder="Mobile">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input class="au-input au-input--full" type="text" name="address" placeholder="Address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Class #</label>
                        <input class="au-input au-input--full" type="text" name="classNumber" placeholder="Class #">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="class">Class</label>
                        <select class="form-control" name="class" id="subject">
                            <optgroup label="BS">
                                <option value="BS Computer">Computer</option>
                                <option value="BS English Islmic">English Islmic</option>
                                <option value="BS Botony">Botony</option>
                            </optgroup>
                            <optgroup label="Other">
                                <option value="Other First year">First year</option>
                                <option value="Other Second Year">Second Year</option>
                            </optgroup>
                        </select>
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
                Already Registered?
                <a href="{{ route('login') }}">Sign In Here</a>
            </p>
        </div>
    </div>
@endsection
