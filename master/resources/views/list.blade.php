@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Documents</h1>
                </div>

                <div class="card-body book-list">
                    <nav class="list-group">
                    @foreach ($data as $book)
                        <a href="/book/{{ $book->slug }}.html" class="list-group-item list-group-item-action" data-viewed="{{ $book->viewed }}">
                            <strong>{{ $book->title }}</strong>
                            <span class="btn btn-primary">More Info</span>
                        </a>
                    @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
