@extends('admin.dashboard.layout.app')
@section('content')
    <div class="row m-t-25">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        Register New Student
                    </h2>
                    <hr>
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input class="form-control" type="text" name="fname" id="fname"
                                        placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input class="form-control" type="text" name="lname" id="lname"
                                        placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="class">Class #</label>
                                    <input class="form-control" type="text" name="class" id="class" placeholder="Class #">
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date Of Birth</label>
                                    <input class="form-control" type="date" name="dob" id="dob"
                                        placeholder="Date Of Birth">
                                </div>
                                <div class="form-group">
                                    <label for="address">Addresss</label>
                                    <input class="form-control" type="text" name="address" id="address"
                                        placeholder="Addresss">
                                </div>
                                <button class="btn btn-primary btn-block">Register new Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
