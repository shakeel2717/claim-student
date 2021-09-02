@extends('dashboard.layout.app')
@section('content')
    <div class="row m-t-25">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        Register New Complain
                    </h2>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Staff</th>
                                <th>Complain</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($totalComplain as $complain)
                                <tr>
                                    <td>{{ $complain->subject }}</td>
                                    <td>{{ $complain->staff }}</td>
                                    <td>{{ $complain->value }}</td>
                                    <td>{{ $complain->created_at }}</td>
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
