@extends('layout')

@section('content')

    <div class="container">
        <h3 class="icon-edit">{{$recipe->name}}</h3>
        <a href="/recipes/{{$recipe->id}}/edit" ><i class="fa fa-edit"></i></a>
        <section>
            {{$recipe->description}}
        </section>
        <h3>Ингредиенты</h3>
        {{$recipe->getIngredientTitles()}}
    </div>
@endsection
