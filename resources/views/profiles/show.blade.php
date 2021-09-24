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
    </div>
@endsection
