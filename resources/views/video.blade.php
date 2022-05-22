@extends('layout.main')
@section('container')
    <div class="container">
        <h2 class="mb-3">Video Booster</h2>
        <div class="d-flex">
            @php
                $i = 1;
            @endphp
            <div class="row">
                @foreach ($video as $videos)
                    <div class="col p-3 mb-3 me-3">
                        <iframe width="512" height="324" src="{{ $videos->url }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <p class="fw-bold fst-italic">
                            {{ $videos->judul_vid }}
                        </p>
                    </div>
                    @if ($i % 2 == 0)
                        <div class="w-100"></div>
                    @endif
                    @php
                        $i++;
                    @endphp
                @endforeach

            </div>
        </div>
        {{ $video->links() }}
        
    </div>
@endsection