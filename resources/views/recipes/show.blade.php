@extends('layouts.app')

@section('content')
    <div class="container">
        {{$recipe}}
        <article>
            <h1 class="text-center mt-3">{{$recipe->title}}</h1>
            <div>
                <img src="/storage/{{$recipe->image}}" alt="">
            </div>
            <div>
                <p>
                    <span class="font-weight-bold text-primary">Categoria: </span>{{$recipe->category->name}}
                </p>
                <p>
                    <span class="font-weight-bold text-primary">Autor: </span>{{$recipe->user->name}}
                </p>
            </div>
            <div>
                <h2 class="text-primary mt-3">Ingredientes</h2>
                {!! $recipe->ingredients !!}
            </div>
            <div>
                <h2 class="text-primary mt-3">Preparacion</h2>
                {!! $recipe->preparation !!}
            </div>
        </article>
    </div>
@endsection
