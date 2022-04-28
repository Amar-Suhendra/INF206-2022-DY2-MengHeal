@extends('admin.layout.main')

@section('title-page', 'List Users')
@section('title-tab', 'User')

@section('mainContent')
    {{-- <section class="content" style="background-color: #272A37;"> --}}
    <!-- tabel -->
    <table id="example1" class="table table-striped table-dark">
        <thead>
            <tr>
                <th>No.</th>
                <th>Quote</th>
                <th>Dibuat</th>
                <th>Diupdate</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($quotes as $quote)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $quote['quotes'] }}</td>
                    <td>{{ $quote['create_at'] }}</td>
                    <td>{{ $quote['update_at'] }}</td>

                </tr>
            @endforeach

        </tbody>

    </table>

    <!-- /.tabel -->
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
