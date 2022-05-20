@extends('layout.main')
@section('container')
    <div class="container">
        <h2 class="mb-3">Quotes of the day</h2>
        <div class="d-flex">
            @php
                $i = 1;
            @endphp
            <div class="row">
                @foreach ($quote as $quotes)
                    <div class="col-sm bg-white shadow p-3 border  mb-3 me-3">
                        <div class="small-box">
                            <div class="inner">
                                <p class="fw-bold fst-italic">
                                    "{{ $quotes->quotes }}"
                                </p>
                                <p class="text-end">
                                    -{{ $quotes->author }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @if ($i % 3 == 0)
                        <div class="w-100"></div>
                    @endif
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
        </div>

        {{ $quote->links() }}
    </div>
@endsection
