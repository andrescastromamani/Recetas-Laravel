@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <h2 class="text-center text-primary">{{$profile->user->name}}</h2>
                <a href="{{$profile->user->url}}">Visitar Sitio Web</a>
            </div>
        </div>
    </div>
@endsection
