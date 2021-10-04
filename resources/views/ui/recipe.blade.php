<div class="col-md-3 m-3">
    <div class="card" style="width: 18rem;">
        <img src="/storage/{{$recipe->image}}" class="card-img-top" alt="image recipe">
        <div class="card-body">
            <h5 class="card-title text-center">{{$recipe->title}}</h5>
            <div class="d-flex justify-content-between">
                <p class="text-info font-weight-bold">
                    <date-recipe>
                        date="{{$recipe->created_at}}"
                    </date-recipe>
                </p>
                <p>{{count($recipe->likeuser)}} les gusto</p>
            </div>
            <p class="card-text text-center">{{Str::words(strip_tags($recipe->preparation),15)}}</p>
            <a href="{{route('recipes.show',$recipe->id)}}"
               class="btn btn-outline-info d-block">Ver Receta</a>
        </div>
    </div>
</div>
