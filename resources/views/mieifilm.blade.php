@extends('layouts.main')

@section('content')
    <h1>i miei film</h1>


    <div class="d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card m-5" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titolo film</h5>
                    <h5 class="card-title">Titolo originale</h5>
                    <p class="card-text">nazionalità</p>
                    <p class="card-text">data</p>
                    <p class="card-text">voto</p>
                    <a href="#" class="btn btn-primary">vai</a>
                </div>
            </div>
        @endforeach


    </div>
@endsection
