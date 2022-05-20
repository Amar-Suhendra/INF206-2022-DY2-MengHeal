@extends('admin.layout.main')
@section('title-tab', 'Add Quote')
@section('title-page', 'Add Quote')

@section('mainContent')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('admin/addquote') }}" method="post">
                @csrf
                <label for="quote">Quote</label>
                <textarea class="form-control" name="quote" aria-label="With textarea" id="quote"
                    placeholder="Write quote here!"></textarea>
                <label for="author">Author</label>
                <textarea name="author" class="form-control" aria-label="With textarea"
                    placeholder="Write quote author here!"></textarea>
                <button type="submit" class="btn btn-success ms-auto mt-3">
                    Add Quote
                </button>
                <a href="{{ url('admin/quotes') }}" class="btn btn-info ms-5 mt-3">Cancel</a>

            </form>
        </div>
    </div>
@endsection
