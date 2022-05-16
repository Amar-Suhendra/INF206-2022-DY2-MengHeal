@extends('layout.main')
@section('container')
    <div class="container">
        <h2 class="mb-5">Quotes of the day</h2>
        <div class="d-flex">
            @foreach ($quote as $quotes)
                <div class="card shadow border-primary w-50 p-3 mb-5 me-5">
                    <p class="fw-bold fst-italic">
                        "{{ $quotes->quotes }}"
                    </p>
                    <p class="text-end">
                        -{{ $quotes->author }}
                    </p>
                </div>
            @endforeach
        </div>

        {{ $quote->links() }}
    </div>
@endsection
