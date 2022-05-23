@extends('admin.layout.main')

@section('title-page', 'List Users')
@section('title-tab', 'User')

@section('mainContent')
    {{-- <section class="content" style="background-color: #272A37;"> --}}
    <div class="mb-2"><a href="{{ url('admin/users/add') }}" type="button"
            class="btn btn-info bg-gradient-info">Add
            User</a>
    </div>
    <!-- tabel -->

    <table id="example1" class="table table-striped table-dark">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($users as $user)
                @if ($user['level_access'] === 1)
                    @continue
                @else
                    <tr>
                        <td scope="row">{{ $i }}</td>
                        <td scope="row">{{ $user['name'] }}</td>
                        <td scope="row">{{ $user['username'] }}</td>
                        <td scope="row">{{ $user['email'] }}</td>
                        <td scope="row">
                            @if ($user['level_access'] === 0)
                                Dokter
                            @else
                                Pasien
                            @endif
                        </td>
                        <td>
                            <div class="d-flex flex-row">
                                <button type="button" class="mx-3 btn btn-sm bg-gradient-danger confirm"
                                    data-id="{{ $user['id'] }}">
                                    Delete
                                    <form action="{{ url('admin/users/delete') }}" method="post"
                                        id="delete{{ $user->id }}">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{ $user['id'] }}">
                                    </form>
                                </button>
                                <a href="{{ url('admin/users/' . $user['id'] . '/edit') }}"
                                    class="btn btn-sm bg-gradient-info">Edit</a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i += 1;
                    @endphp
                @endif
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
    @if (session('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your Data has been Updated',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
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
    <!-- Script to send alert to user -->
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-info'
            },
            buttonsStyling: false
        })

        $('.confirm').click(function() {
            let id = $(this).attr('data-id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#delete${id}`).submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Cancelled!',
                        'Your file is safe.',
                        'error'
                    )
                }
            })
        });
    </script>

@endsection
