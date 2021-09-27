@extends('layouts.app')

@section('content')
    <div class="container">
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
                <p>
                    <span class="font-weight-bold text-primary">Fecha: </span>
                    @php
                        $d = $recipe->created_at;
                    @endphp
                    <date-recipe date="{{$d}}"></date-recipe>
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
            <like-icon recipe-id="{{$recipe->id}}"></like-icon>
        </article>
    </div>
@endsection
<script>
    import DateRecipe from "../../js/components/DateRecipe";

    export default {
        components: {DateRecipe}
    }
</script>
