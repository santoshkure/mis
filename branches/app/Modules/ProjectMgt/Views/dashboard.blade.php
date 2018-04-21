@extends('ProjectMgt::layouts.app')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h5 class="text-white">Dashboard</h5> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-white">{{--<a href="javascript:void(0)">--}}{{ trans('ProjectMgt::example.home') }}{{--</a>--}}</li>
            <li class="breadcrumb-item text-white active">Dashboard</li>
        </ol>
    </div>
</div>

<div class="container-fluid module-list">
    <div class="row bg-white m-l-0 m-r-0 box-shadow ">

        <!-- column -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Extra Area Chart</h4>
                    <div id="extra-area-chart"></div>
                </div>
            </div>
        </div>
        <!-- column -->

        <!-- column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body browser">
                    <p class="f-w-600">iMacs <span class="pull-right">85%</span></p>
                    <div class="progress ">
                        <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                    </div>

                    <p class="m-t-30 f-w-600">iBooks<span class="pull-right">90%</span></p>
                    <div class="progress">
                        <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                    </div>

                    <p class="m-t-30 f-w-600">iPhone<span class="pull-right">65%</span></p>
                    <div class="progress">
                        <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                    </div>

                    <p class="m-t-30 f-w-600">Samsung<span class="pull-right">65%</span></p>
                    <div class="progress">
                        <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                    </div>

                    <p class="m-t-30 f-w-600">android<span class="pull-right">65%</span></p>
                    <div class="progress m-b-30">
                        <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
</div>
@endsection