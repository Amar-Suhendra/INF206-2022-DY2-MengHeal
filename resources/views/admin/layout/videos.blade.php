@extends('admin.layout.main')
@section('title-page', 'List Videos')

@section('mainContent')

    <div class="mb-2"><a href="{{ url('admin/addvideos') }}" type="button"
            class="btn btn-info bg-gradient-info">add
            video</a>
    </div>
    <!-- table -->
    <table id="example1" class="table table-striped table-dark">
        <thead>
            <tr>
                <th>No.</th>
                <th>Video Title</th>
                <th>Video Link</th>
                <th>Upload Date</th>
                <th>Edit Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($videos as $video)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td scope="row">{{ $video['judul_vid'] }}</td>
                    <td scope="row">{{ $video['url'] }}</td>
                    <td scope="row">{{ $video['created_at'] }}</td>
                    <td scope="row">{{ $video['updated_at'] }}</td>
                    <td scope="row" class="justify-content-center">
                        <a type="submit" class="btn btn-sm bg-gradient-danger delete" data-id="{{ $video['id'] }}">
                            Delete
                            <form action="{{ url('admin/deletevideos/' . $video->id) }}" method="POST"
                                id="delete{{ $video['id'] }}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                        <a href="{{ url('admin/quotes/' . $quote['id'] . '/edit') }}"
                            class="btn btn-sm bg-gradient-info">Edit</a>
                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>
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
    <!-- Script to send alert to user -->
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-info'
            },
            buttonsStyling: false
        })

        $('.delete').click(function() {
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
