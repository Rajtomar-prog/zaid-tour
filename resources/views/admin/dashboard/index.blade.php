@extends('admin.layouts.admin-app')
@section('page_title', 'Dashboard')

@section('main_headeing', 'Dashboard')
@section('sub_headeing', 'Dashboard')

@section('content_section')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="card card-body">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->

                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-1">
                                    <div class="icon">
                                        <img height="50" width="50" src="{{ asset('admin-assets/dist/img/dashboard/parachute.png') }}" alt="tour">
                                    </div>
                                    <div class="inner">
                                        <p>Tours</p>
                                        <h4>2</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-2">
                                    <div class="icon">
                                        <img height="50" width="50" src="{{ asset('admin-assets/dist/img/dashboard/globe.png') }}"
                                            alt="destination">
                                    </div>
                                    <div class="inner">
                                        <p>TEST</p>
                                        <h4>3</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-3">
                                    <div class="icon">
                                        <img height="50" width="50" src="{{ asset('admin-assets/dist/img/dashboard/award.png') }}" alt="award">
                                    </div>
                                    <div class="inner">
                                        <p>Awards</p>
                                        <h4>3</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-4">
                                    <div class="icon">
                                        <img height="50" width="50" src="{{ asset('admin-assets/dist/img/dashboard/notepad.png') }}" alt="notepad">
                                    </div>
                                    <div class="inner">
                                        <p>Articles</p>
                                        <h4>2</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

@endsection


@section('additional_js')
@endsection

@section('additional_css')
@endsection