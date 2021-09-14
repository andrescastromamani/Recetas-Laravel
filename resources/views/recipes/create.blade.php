@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
          integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection
@section('content')
    <div class="container">
        <a href="{{route('recipes.index')}}" class="btn btn-dark">Inicio</a>
        <h2 class="text-center mt-3">Formulario de creacion</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
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
                    <div class="mb-3">
                        <label for="ingredients" class="form-label">Ingredientes</label>
                        <input type="hidden" id="ingredients" name="ingredients" value="{{old('ingredients')}}">
                        <trix-editor class="form-control @error('ingredients') is-invalid @enderror "
                                     input="ingredients"></trix-editor>
                        @error('ingredients')
                        <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="preparation" class="form-label">Preparación</label>
                        <input type="hidden" id="preparation" name="preparation" value="{{old('preparation')}}">
                        <trix-editor class="form-control @error('preparation') is-invalid @enderror"
                                     input="preparation"></trix-editor>
                        @error('preparation')
                        <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="preparation" class="form-label">Imagen</label>
                        <input type="file" id="image" name="image" class="form-control @error('preparation') is-invalid @enderror">
                        @error('image')
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

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"
            integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
