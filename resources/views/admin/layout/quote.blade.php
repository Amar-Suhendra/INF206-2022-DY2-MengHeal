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
                    <td scope="row">{{ $quote['author'] }}</td>
                    <td scope="row">{{ $quote['created_at'] }}</td>
                    <td scope="row">{{ $quote['updated_at'] }}</td>
                    <td scope="row" class="row justify-content-center">
                        {{-- <a class="mx-3 btn btn-sm bg-gradient-danger delete" data-id="{{ $quote['id'] }}">Delete</a> --}}
                        <div class="d-flex flex-row">
                            <button type="button" class="mx-3 btn btn-sm bg-gradient-danger" data-toggle="modal"
                                data-target="#exampleModal" data-quote="{{ $quote['id'] }}">
                                Delete
                            </button>
                            <a href="{{ url('admin/' . $quote['id'] . '/edit') }}"
                                class="btn btn-sm bg-gradient-info">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

    <!-- /.tabel -->

    <!-- Button trigger modal -->


    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/deletequote') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <h4>Are you sure?</h4>
                        <input type="hidden" name='id' id="id">
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
    <!-- Script to send data to modal -->
    <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var idQuote = button.data('quote') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body input').val(idQuote)
        })
    </script>
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
