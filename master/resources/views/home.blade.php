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

                <a href="/list/" class="btn btn-primary">View The Document List</a>


                   @if (session('book.bought'))
                       yep
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
