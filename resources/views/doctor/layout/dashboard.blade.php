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

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex w-100 justify-content-between">
                    <h3>Today Schedules</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        @foreach ($today as $data)
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">No {{ $data['no_antrian'] }}</h5>
                                    <small>{{ $data['tanggal_konsul'] }}</small>
                                </div>
                                <h5 class="mb-1">{{ $data['name'] }}</h5>
                                <p class="mb-1">{{ $data['email'] }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header d-flex w-100 justify-content-between">
                    <h3>Tomorrow Schedules</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        @foreach ($tomorrow as $data)
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">No {{ $data['no_antrian'] }}</h5>
                                    <small>{{ $data['tanggal_konsul'] }}</small>
                                </div>
                                <h5 class="mb-1">{{ $data['name'] }}</h5>
                                <p class="mb-1">{{ $data['email'] }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>All Schedules</h3>
        </div>
        <div class="card-body">
            <!-- tabel -->
            <table id="example1" class="table border table-striped table-light">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>No Antrian</th>
                        <th>Tanggal Konsul</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($schedule as $schedules)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $schedules['name'] }}</td>
                            <td>{{ $schedules['email'] }}</td>
                            <td>{{ $schedules['no_antrian'] }}</td>
                            <td>{{ $schedules['tanggal_konsul'] }}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <!-- /.tabel -->
        </div>
    </div>
@endsection
<!-- script table -->
@section('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
