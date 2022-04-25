@extends('layout/main')

@section('container')
<div class="d-flex justify-content-center p-5">
        <div class="card text-center " style="width: 20rem; height:18rem; border-radius: 10%">
            <div class="card-header bg-transparent">
                <div class="card-title">
                    <h5>Nomor antrian </h5>
                    <h5>berhasil dikonfirmasi</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <br>
                    <img src="assets/icon/ceklist.png" class="ceklist">
                </div>
            </div>
            <div class="card-footer bg-transparent">
                <a href="{{ url('/index') }}" class="btn btn-primary" style="width:16rem;">
                    OK
                </a>
            </div>
        </div>
    </div>
@endsection