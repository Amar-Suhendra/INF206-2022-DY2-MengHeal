@extends('admin.layout.main')
@section('title-tab', 'Quote')
@section('title-page', 'Quote')

@section('mainContent')
    <form action="{{ url('admin/updatequote/' . $quote['id']) }}" method="post">
        @csrf
        @method('PUT')
        <label for="quote">Quote</label>
        <textarea class="form-control" name="quote" aria-label="With textarea" id="quote"
            placeholder="Write quote here!">{{ $quote->quotes }}</textarea>
        <label for="author">Author</label>
        <textarea name="author" class="form-control" aria-label="With textarea"
            placeholder="Write quote author here!">{{ $quote->author }}</textarea>
        <button type="submit" class="btn btn-success ms-auto mt-3">
            Update Quote
        </button>
    </form>
@endsection
