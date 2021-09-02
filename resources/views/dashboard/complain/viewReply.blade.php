@extends('dashboard.layout.app')
@section('content')
    <div class="row m-t-25">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        Complaint Reply
                    </h2>
                    <hr>
                    <form action="{{ route('complain.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                @foreach ($viewReply as $reply)
                                    <div class="form-group">
                                        <label for="message">Complaint Reply</label>
                                        <textarea name="message" id="message" rows="9" class="form-control"
                                            spellcheck="false">{{ $reply->value }}</textarea>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
