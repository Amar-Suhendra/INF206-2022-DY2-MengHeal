@extends('admin.layout.main')

@section('mainContent')
    {{-- <section class="content" style="background-color: #272A37;"> --}}
    <!-- tabel -->
    <table id="example1" class="table table-striped table-dark">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($registers as $register)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $register['name'] }}</td>
                    <td>{{ $register['Username'] }}</td>
                    <td>{{ $register['Email'] }}</td>
                    <td class="row justify-content-center">
                        @if ($register['status'] === null)
                            <form action="{{ url('/admin/user-registration/' . $register['id']) }}" method="POST"
                                style="margin-right: 1rem;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-block bg-gradient-danger"
                                    onclick="return confirm('Anda yakin?')">Tolak</button>
                            </form>
                            <form action="{{ url('/admin/user-registration/' . $register['id']) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-block bg-gradient-primary "
                                    onclick="confirm()">Terima</button>
                            </form>
                        @elseif ($register['status'] == 1)
                            <p class="btn btn-sm btn-block bg-gradient-success">Diterima</p>
                        @else
                            <p class="btn btn-sm btn-block bg-gradient-danger">Ditolak</p>
                        @endif
                    </td>
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
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

    <script>
        function confirm() {
            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        }
    </script>
@endsection
