@extends('admin.dashboard.layout.app')
@section('content')
    <div class="row m-t-25">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        All Students List
                    </h2>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Class</th>
                                <th>Address</th>
                                <th>DOB</th>
                                <th>Create Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($totalStudents as $student)
                                <tr>
                                    <td>{{ $student->fname }}</td>
                                    <td>{{ $student->lname }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->password }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->dob }}</td>
                                    <td>{{ $student->created_at }}</td>
                                </tr>
                            @empty
                                <h2 class="text-center">Sorry, no Complain Found</h2>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
