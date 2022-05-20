@extends('doctor.layout.main')

@section('title-page', 'Patients')

@section('mainContent')
    {{-- <section class="content" style="background-color: #272A37;"> --}}
    <div class="card">
        <div class="card-body">
            <!-- tabel -->
            <table id="example1" class="table border table-striped table-light">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Jumlah Konsultasi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($patients as $patient)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $patient['name'] }}</td>
                            <td>{{ $patient['username'] }}</td>
                            <td>{{ $patient['email'] }}</td>
                            <td>{{ $patient['jumlah_konsul'] }}</td>
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
