@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('recipes.index')}}" class="btn btn-dark">Inicio</a>
        <h2 class="text-center mt-3">Formulario de creacion</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="title" class="form-control" id="title" aria-describedby="title" placeholder="Titulo Receta">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
