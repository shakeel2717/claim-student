@extends('dashboard.layout.app')
@section('content')
    <div class="row m-t-25">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        Register New Complain
                    </h2>
                    <hr>
                    <form action="{{ route('complain.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <select class="form-control" name="subject" id="subject">
                                        <option value="University">University</option>
                                        <option value="Garden">Garden</option>
                                        <option value="Enviroment">Enviroment</option>
                                        <option value="Students">Students</option>
                                        <option value="Class">Class</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Staff">Complain Against</label>
                                    <select class="form-control" name="staff" id="subject">
                                        <option value="Teacher">Teacher</option>
                                        <option value="Principle">Principle</option>
                                        <option value="Student">Student</option>
                                        <option value="Fees">Fees</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="message">Type Complain Detail</label>
                                    <textarea name="message" id="message" rows="9"
                                        placeholder="Type Complain Detail Here..." class="form-control"
                                        spellcheck="false"></textarea>
                                </div>
                                <button class="btn btn-primary btn-block">Submit Complain</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
