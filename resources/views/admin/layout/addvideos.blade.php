@extends('admin.layout.main')

@section('title-page', 'Add Video')
@section('mainContent')
    <form action="{{ url('admin/addvideo') }}" method="post">
        @csrf
        <div class="form-group">
            <span>Video title : </span>
            <input type="text" class="form-control" placeholder="Video title">
        </div>
        <div class="form-group">

            <span>URL : </span>
            <input type="text" class="form-control" name="url" placeholder="URL">
        </div>
        <button type="submit" class="btn btn-success ms-auto mt-3">
            Add Video
        </button>
    </form>
@endsection
