@extends('layouts.main')

@section('heading', 'Access Denied')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0" style="overflow-x: initial !important;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><span class="text-danger"><i class="fa fa-times"></i> </span>Access Denied</h1>
                                    </div>
                                    <h6 class="text-gray-900 justify-content-center"><center>You do not have permission to view that page.</center></h6>
                                    <br>
                                    <a href="/" class="btn btn-danger btn-block">Return</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
