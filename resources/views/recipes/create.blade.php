@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('recipes.index')}}" class="btn btn-dark">Inicio</a>
        <h2 class="text-center mt-3">Formulario de creacion</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('recipes.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror "
                               id="title" aria-describedby="title"
                               placeholder="Titulo Receta"
                               value="{{old('title')}}">
                        @error('title')
                        <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categorias</label>
                        <select name="category" id="category"
                                class="form-control @error('category') is-invalid @enderror ">
                            <option value="">-- Seleccione una Categoria --</option>
                            @foreach($categories as $category)
                                <option
                                    value="{{$category->id}}" {{old('category')== $category->id ? 'selected':''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
