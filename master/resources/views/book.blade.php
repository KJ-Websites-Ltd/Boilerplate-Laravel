@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <article class="col-md-8">
            <article class="card">
                <div class="card-header">
                    <h1>{{ $data->title }}</h1>
                </div>

                <figure class="card-body">

                <img src="{{ $data->image }}" alt="{{ $data->title }}">

                <figcaption>
                {{ $data->html }}
                
                <form class="form" action="" method="post">
                    @csrf
                    <button class="btn btn-secondary">buy now</button>
                </form>
                
                </figcaption>


                   {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    --}}
                </figure>
            </article>
        </div>
    </div>
</div>
@endsection
