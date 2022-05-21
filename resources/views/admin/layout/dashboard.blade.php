@extends('admin.layout.main')

@section('title-tab', 'Dashboard')
@section('title-page', 'Dashboard')

@section('mainContent')
    <!-- Info boxes -->
    <div class="row">



        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>


        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">User Register</span>
                    <span class="info-box-number">{{ $countRegister }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class='fas fa-user-circle'></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">{{ $countUser }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-procedures"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Patients</span>
                    <span class="info-box-number">{{ $countPatient }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary elevation-1"><i class="nav-icon far fa-comment"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Quotes</span>
                    <span class="info-box-number">{{ $countQuotes }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-light elevation-1"><i class="nav-icon fas fa-video"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Videos</span>
                    <span class="info-box-number">{{ $countVideos }}</span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-hospital-user"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Doctor</span>
                    <span class="info-box-number">{{ $doctor }}</span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->


    </div>
    <!-- /.row -->
@endsection
