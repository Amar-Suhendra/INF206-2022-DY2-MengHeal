@extends('admin.layout.main')

@section('title-page', 'Add Video')
@section('mainContent')
    <form action="{{ url('admin/addvideos') }}" method="post">
        @csrf
        <div class="form-group">
            <span>Video title : </span>
            <input type="text" class="form-control" placeholder="Video title" name="judul_vid"
                value="{{ $video['judul_vid'] }}">
        </div>
        <div class="form-group">

            <span>URL : </span>
            <input type="text" class="form-control" name="url" placeholder="URL" value="{{ $video['url'] }}">
        </div>
        <button type="submit" class="btn btn-success ms-auto mt-3">
            Add Video
        </button>
        <a href="{{ url('admin/videos') }}" class="btn btn-info ms-5 mt-3">Cancel</a>
    </form>
@endsection
