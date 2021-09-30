@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-uppercase">Ultimas Rectas</h2>
        <div class="row">
            @foreach($latestRecipes as $latestrecipe)
                <div class="col-md-4 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/storage/{{$latestrecipe->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{Str::title($latestrecipe->title)}}</h5>
                            <p class="card-text">{{Str::words(strip_tags($latestrecipe->preparation),15)}}</p>
                            <a href="#" class="btn btn-outline-info d-block">Ver Receta</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
