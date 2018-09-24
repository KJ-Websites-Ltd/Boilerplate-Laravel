@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $data->title }}</h1>
	                <p>{{ $data->summary }}</p>
                </div>

                <div class="card-body">

                <a href="/list/" class="btn btn-primary">View The Document List</a>


                   {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
