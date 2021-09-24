@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
          integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection

@section('content')
    <div class="container">
        {{$profile}}
        <h1 class="text-center">Tu Perfil</h1>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror "
                               id="name" aria-describedby="name"
                               placeholder="Nombre..."
                               value="{{$profile->user->name}}">
                        @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="biography" class="form-label">Biografia</label>
                        <input type="hidden" id="biography" name="biography">
                        <trix-editor class="form-control @error('biography') is-invalid @enderror "
                                     input="biography"></trix-editor>
                        @error('biography')
                        <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagen</label>
                        <input type="file" id="image" name="image"
                               class="form-control @error('image') is-invalid @enderror">
                        @if ($profile->image)
                            <div class="mt-3">
                                <p>Imagen Actual:</p>
                                <img alt="" style="width: 300px">
                            </div>
                        @endif
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
            crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection
