@extends('layout.main')
@section('container')
    <div class="container">
        {{-- <h2>Quotes of the day</h2> --}}
        @foreach ($quote as $quotes)
            <div class="card shadow border-primary w-50 p-3 mb-5">
                <p class="fw-bold fst-italic">
                    "{{ $quotes['quotes'] }}"
                </p>
                <p class="text-end">
                    -{{ $quotes['author'] }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
