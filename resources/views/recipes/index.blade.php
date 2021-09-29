@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('recipes.create')}}" class="btn btn-dark">
            <svg class="w-6 h-6 icon-profile" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                      clip-rule="evenodd"></path>
            </svg>
            Crear
        </a>
        <h2 class="text-center mt-3">Administra tus Recetas</h2>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-active table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recipes as $recipe)
                        <tr>
                            <td>{{$recipe->title}}</td>
                            <td>{{$recipe->category->name}}</td>
                            <td>
                                <delete-recipe recipe-id={{$recipe->id}}></delete-recipe>
                                <a href="{{route('recipes.edit', $recipe)}}"
                                   class="btn btn-warning mr-2 ml-2 float-right">Editar</a>
                                <a href="{{route('recipes.show', $recipe)}}"
                                   class="btn btn-success mr-2 ml-2 float-right">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$recipes->links()}}
        <h2 class="text-center">Recetas que te Gustan</h2>
        <div class="row">
            <div class="col-md-8 bg-white text-center">
                @if (count($userlikes)>0)
                    <ul class="list-group">
                        @foreach($userlikes as $userlike)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p>{{$userlike->title}}</p>
                                <a href="{{route('recipes.show' , $userlike->id)}}" class="btn btn-outline-info">Ver
                                    Receta</a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-center">Aun no tienes recetas guardadas
                        <small>Dale me gusta a recetas</small>
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection
