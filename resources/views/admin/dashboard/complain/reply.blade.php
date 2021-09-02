@extends('admin.dashboard.layout.app')
@section('content')
    <div class="row m-t-25">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        Reply on Existing Complain
                    </h2>
                    <hr>
                    <form action="{{ route('complaintReplyReq') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-primary">
                                    {{ $complaint->value }}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="value">Type Reply on Complain</label>
                                    <input type="hidden" name="complaint_id" value="{{ $complaint->id }}">
                                    <textarea name="value" id="value" rows="9" placeholder="Type Reply on Complain..."
                                        class="form-control" spellcheck="false"></textarea>
                                </div>
                                <button class="btn btn-primary btn-block">Submit Complain Reply</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
