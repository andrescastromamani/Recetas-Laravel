@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
          integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-uppercase">Ultimas Rectas</h2>
        <div class="row owl-carousel">
            @foreach($latestRecipes as $latestrecipe)
                <div class="col mt-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/storage/{{$latestrecipe->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{Str::title($latestrecipe->title)}}</h5>
                            <p class="card-text">{{Str::words(strip_tags($latestrecipe->preparation),15)}}</p>
                            <a href="{{route('recipes.show', $latestrecipe->id)}}" class="btn btn-outline-info d-block">Ver
                                Receta</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @foreach($recipes as $key => $group)
            <h2 class="text-uppercase">{{str_replace('-',' ',$key)}}</h2>
            <div class="row">
                @foreach($group as $recipes)
                    @foreach($recipes as $recipe)
                        <div class="col-md-3 m-3">
                            <div class="card" style="width: 18rem;">
                                <img src="/storage/{{$recipe->image}}" class="card-img-top" alt="image recipe">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$recipe->title}}</h5>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-info font-weight-bold">
                                            <date-recipe>
                                                date="{{$recipe->created_at}}"
                                            </date-recipe>
                                        </p>
                                        <p>{{count($recipe->likeuser)}} les gusto</p>
                                    </div>
                                    <p class="card-text text-center">{{Str::words(strip_tags($recipe->preparation),15)}}</p>
                                    <a href="{{route('recipes.show',$recipe->id)}}"
                                       class="btn btn-outline-info d-block">Ver Receta</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
