@extends('admin.layout.main')

@section('title-tab', 'Add User')
@section('title-page', 'Add User')

@section('mainContent')
    <div class="row">
        <div class="col-md-4 ml-4">
            <!-- start form tambah data -->
            <form action="{{ url('admin/users/add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="name"
                        name="name" placeholder="Full name">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="text" class="form-control" id="email" name="password" placeholder="Password">
                </div>

                <!-- status -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                        <option value="0">Dokter</option>
                        <option value="{{ null }}"> Pasien</option>
                    </select>
                </div>


                <!-- button submit -->
                <button type="submit" class="btn btn-info">Submit</button>
                <!-- end button submit -->
            </form>
            <!-- end form -->
        </div>
    </div>
@endsection
