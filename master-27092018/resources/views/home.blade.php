@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Home Page</h1>
	                <p>A Great Mr Men Documents Website</p>
                </div>

                <div class="card-body">

                
                   @if ($data->book_bought)
                    <h2>Books bought</h2>
                    <nav class="list-group">
                    @foreach ($data->book_bought as $book)
                        <a href="/book/{{ $book->slug }}.html" class="list-group-item list-group-item-action">
                            <strong>{{ $book->title }}</strong>
                        </a>
                    @endforeach
                    </nav>
                    @endif
      
                    <a href="/list/" class="btn btn-primary">View The Document List</a>

                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection