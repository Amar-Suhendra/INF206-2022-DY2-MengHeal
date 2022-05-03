@extends('layout.main')
@section('container')
    <div class="d-flex justify-content-center p-5">
        <div class="card text-center " style="width: 18rem; border-radius: 10%">
            <div class="card-header bg-transparent">
                <div class="card-title">
                    @isset($status)
                        <h3>No Antrian Anda</h3>
                    @else
                        <h3>No Antrian</h3>
                    @endisset

                </div>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <br>
                    <h1><b>
                            @if ($antrian)
                                {{ $antrian }}
                            @elseif ($antrian == null)
                                {{ $antrian + 1 }}
                            @endif
                        </b></h1>
                    <br>
                    @if ($jadwal)
                        <h4>Jadwal Konsultasi</h4>
                        <h3>
                            {{ $jadwal }}
                        </h3>
                    @elseif ($jadwal == null)
                        <h4>Kemungkinan Jadwal Konsultasi</h4>
                        <h3>{{ $date = date('Y-m-d', strtotime("+ 2 day")); }}</h3>
                    @endif
                </div>
            </div>
            <div class="card-footer bg-transparent">
                <a href="{{ url('get-antrian/') }}" type="button"
                    class="btn btn-primary rounded-pill text-white text-decoration-none fw-bold
                        @if (!isset($status)) @else
                        disabled @endif
                        "
                    style="width:16rem;">
                    Ambil Antrian
                </a>
            </div>
        </div>
    </div>
@endsection
