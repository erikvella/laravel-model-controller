@extends('layouts.main')

@section('content')
    <h1>i miei film</h1>


    <div class="d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card m-5" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h5 class="card-title">{{ $movie->original_title }}</h5>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">{{ $movie->date }}</p>
                    <p class="card-text">{{ $movie->vote }}</p>
                    <a href="#" class="btn btn-primary">vai</a>
                </div>
            </div>
        @endforeach


    </div>
@endsection
