@extends('layout.main')
@section('container')
    <div class="container">
        <h2 class="mb-5">Quotes of the day</h2>
        <div class="d-flex">
            {{-- <div class="card shadow border-primary w-50 p-3 mb-5 me-5">
                <p class="fw-bold fst-italic">
                    "{{ $quotes->quotes }}"
                </p>
                <p class="text-end">
                    -{{ $quotes->author }}
                </p>
            </div> --}}
            @php
                $i = 1;
            @endphp
            <div class="row">
                @foreach ($quote as $quotes)
                    <div class="col-sm bg-white shadow p-3 border  mb-5 me-5">
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
