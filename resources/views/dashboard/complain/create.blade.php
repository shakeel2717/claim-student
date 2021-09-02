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
                                        <option value="Teachers">Teachers</option>
                                        <option value="Bus">Bus</option>
                                        <option value="Lab ">Lab </option>
                                        <option value="Room">Room</option>
                                        <option value="Student">Student</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Staff">Complain Against</label>
                                    <select class="form-control" name="staff" id="subject">
                                        <option value="The Instructor is not prepared for Each class ">The Instructor is not
                                            prepared for Each class </option>
                                        <option
                                            value="The instructor not communicates with the subject matter effectively ">The
                                            instructor not communicates with the subject matter effectively </option>
                                        <option
                                            value="The instructor doesn't shows respect towards students and encourages class participation ">
                                            The instructor doesn't shows respect towards students and encourages class
                                            participation </option>
                                        <option value="The instructor doesn't leave the class on time">The instructor
                                            doesn't leave the class on time</option>
                                        <option value="The instructor doesn't arrives in the class on time">The instructor
                                            doesn't arrives in the class on time</option>
                                        <option value="Others">Others</option>
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
