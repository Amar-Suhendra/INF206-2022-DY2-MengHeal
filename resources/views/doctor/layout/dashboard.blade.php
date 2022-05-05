@extends('doctor.layout.main')

@section('title-tab', 'Dashboard')
@section('title-page', 'Dashboard')

@section('mainContent')
    <!-- Info boxes -->
    <div class="row">



        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>


        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Registered Patients</span>
                    <span class="info-box-number">{{ $countPatients }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-calendar"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Today Patients</span>
                    <span class="info-box-number">{{ $todayCount }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-calendar"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Tomorrow Patients</span>
                    <span class="info-box-number">{{ $tomorrowCount }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
    <!-- /.row -->
@endsection
