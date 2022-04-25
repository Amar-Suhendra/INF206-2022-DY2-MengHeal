@extends('layout.main')
@section('container')
    <div class="d-flex justify-content-center p-5">
        <div class="card text-center " style="width: 18rem; height:16rem; border-radius: 10%">
            <div class="card-header bg-transparent">
                <div class="card-title">
                    <h3>No Antrian</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <br>
                    <h1><b>
                            @if ($antrian->no_antrian)
                                {{ $antrian->no_antrian }}
                            @else
                                1
                            @endif
                        </b></h1>
                </div>
            </div>
            <div class="mb-2 d-grid gap-2 col-8 mx-auto bg-transparent">
                <a href="{{ url('get-antrian/' . auth()->user()->id) }}" type="button"
                    class="btn btn-primary text-white text-decoration-none fw-bold">
                    Konfirmasi
                </a>
            </div>
        </div>
    </div>
@endsection
