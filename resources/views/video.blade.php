@extends('layout.main')
@section('container')
    <div class="d-flex justify-content-around py-2">
        <div class="card text-center" style="width: 18rem; height:16rem; border-radius: 5%">
            <div class="card-header bg-transparent">
                <div class="card-title">
                   <h5>video 1</h5>
                </div>
            </div>
            <div class="ratio ratio-16x9 mt-2">
                <iframe src="https://www.youtube.com/embed/8iuLXODzL04" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>
        <div class="card text-center " style="width: 18rem; height:16rem; border-radius: 5%">
            <div class="ratio ratio-16x9 mt-5">
                <iframe src="https://www.youtube.com/embed/8iuLXODzL04" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>
        <div class="card text-center " style="width: 18rem; height:16rem; border-radius: 5%">
            <div class="ratio ratio-16x9 my-4">
                <iframe src="https://www.youtube.com/embed/8iuLXODzL04" title="YouTube video" allowfullscreen></iframe>
            </div>
            <div class="mb-2 d-grid gap-2 col-8 mx-auto bg-transparent">
                    <a href="" type="button"
                        class="btn btn-primary text-white text-decoration-none fw-bold">
                        nonton video
                    </a>
            </div>
        </div>
    </div>
    
    <div class="d-flex justify-content-around py-5">
        <div class="card text-center" style="width: 18rem; height:16rem; border-radius: 10%">
        </div>
        <div class="card text-center " style="width: 18rem; height:16rem; border-radius: 10%">
        </div>
        <div class="card text-center " style="width: 18rem; height:16rem; border-radius: 10%">
        </div>
    </div>
@endsection