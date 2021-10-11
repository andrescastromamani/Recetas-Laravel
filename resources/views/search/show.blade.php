@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Resulatados Busqueda: {{$search}}</h2>
        <div class="row">
            @foreach($recipes as $recipe)
                @include('ui.recipe')
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{$recipes->links()}}
        </div>
    </div>
@endsection
