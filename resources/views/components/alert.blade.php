<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger media" role="alert">
                    <i class="tio-clear mt-1 mr-2"></i>
                    <div class="media-body" role="alert">
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif
        @if (session('message'))
        <div class="alert alert-success media" role="alert">
            <i class="tio-done mt-1 mr-2"></i>
            <div class="media-body" role="alert">
                {{ session('message') }}
            </div>
        </div>
        @endif
    </div>
</div>
