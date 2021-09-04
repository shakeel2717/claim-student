@extends('admin.dashboard.layout.app')
@section('content')
    <div class="row m-t-25">
        <div class="col-12 col-sm-6">
            <div class="overview-item overview-item--c1 p-3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $totalStudent->count() }}</h2>
                            <span>Total Students</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-12 col-sm-6">
            <div class="overview-item overview-item--c1 p-3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $totalComplain->count() }}</h2>
                            <span>Total Complains</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="overview-item overview-item--c1 p-3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $totalComplain->where('status', 'Pending')->count() }}</h2>
                            <span>Pending Complains</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="overview-item overview-item--c1 p-3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $totalComplain->where('status', 'Close')->count() }}</h2>
                            <span>Closed Complains</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="overview-item overview-item--c1 p-3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ $totalComplain->where('status', 'Reject')->count() }}</h2>
                            <span>Rejected Complains</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
