@extends('admin.layout.main')

@section('title-page', 'List Quotes')
@section('title-tab', 'Quotes')

@section('mainContent')
    <div class="justify-content-center">
        <a href="{{ url('admin/addquote') }}" class="mx-3 btn btn-success bg-gradient-success">Add Quote</a>
    </div>
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
                    <td scope="row">{{ $quote['quotes'] }}</td>
                    <td scope="row">{{ $quote['created_at'] }}</td>
                    <td scope="row">{{ $quote['updated_at'] }}</td>
                    <td scope="row" class="row justify-content-center">
                        {{-- <a class="mx-3 btn btn-sm bg-gradient-danger delete" data-id="{{ $quote['id'] }}">Delete</a> --}}
                        <button type="button" class="mx-3 btn btn-sm bg-gradient-danger" data-toggle="modal"
                            data-target="#staticBackdrop">
                            Delete
                        </button>
                        <a href="{{ url('admin/' . $quote['id'] . '/edit') }}" class="btn btn-sm bg-gradient-info">Edit</a>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

    <!-- /.tabel -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="staticBackdropLabel">Warning!</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h4>Are you sure?</h4>
                    <form action="{{ url('admin/deletequote') }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" id="id" value="{{ $quote['id'] }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes, delete it!</button>
                </div>
                </form>
            </div>
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
    {{-- <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-info'
            },
            buttonsStyling: false
        })

        var idQuote = $(this).attr('data-id');
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
                // window.location = 'deletequote/' + idQuote;
                $.get('deletequote', {
                    id: idQuote
                });
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
    </script> --}}

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
