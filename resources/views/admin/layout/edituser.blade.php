@extends('admin.layout.main')

@section('title-tab', 'Edit User')
@section('title-page', 'Edit User')

@section('mainContent')
    <div class="row">
        <div class="col-md-4 ml-4">
            <!-- start form tambah data -->
            <form action="{{ url('admin/users/update/' . $user['id']) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="name"
                        name="name" placeholder="Full name" value="{{ $user['name'] }}">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="username"
                        value="{{ $user['username'] }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                        value="{{ $user['email'] }}">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="Status"
                        @if ($user['status'] === 0) value="Dokter"
                    @elseif($user['status'] === null)
                    value="Pasien" @endif
                        readonly>
                </div>




                <!-- button submit -->
                <button type="submit" class="btn btn-info">Update</button>
                <!-- end button submit -->
            </form>
            <!-- end form -->
        </div>
    </div>
@endsection
