@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <article class="col-md-8">
            <article class="card book">
                <div class="card-header">
                    <h1>{{ $data->title }}</h1>
                </div>

                <figure class="card-body">

                <img src="{{ $data->image }}" alt="{{ $data->title }}" class="cover">

                <figcaption>
                {{ $data->html }}
                
                <form class="form" action="" method="post">
                    @csrf
                    <button class="btn btn-secondary">buy now</button>
                    <a href="/list/" class="btn btn-primary">View The Document List</a>
                </form>

                
                
                </figcaption>
                </figure>
            </article>
        </div>
    </div>
</div>
@endsection
