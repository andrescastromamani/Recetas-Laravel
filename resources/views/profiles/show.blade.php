@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/storage/{{$profile->image}}" alt="" class="rounded-circle w-100">
            </div>
            <div class="col-md-8">
                <h2 class="text-center text-primary">{{$profile->user->name}}</h2>
                <a class="text-center" href="{{$profile->user->url}}">Visitar Sitio Web</a>
                {!! $profile->biography!!}
            </div>
        </div>
        <h2 class="text-center mt-3">Recetas creadas por: {{$profile->user->name}}</h2>
        <div class="row mt-5">
            @if (count($recipes) > 0)
                @foreach($recipes as $recipe)
                    <div class="col-md-3">
                        <img src="/storage/{{$recipe->image}}" class="card-img-top" alt="image recipe">
                        <div class="card-body">
                            <h3 class="text-center">{{$recipe->title}}</h3>
                            <a href="{{route('recipes.show', $recipe)}}" class="btn btn-success d-block">Ver Detalle</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>{{$profile->user->name}} no tiene recetas creadas por el momento</p>
            @endif
        </div>
        {{$recipes->links()}}
    </div>
@endsection
