@extends('layout')

@section('content')

    <div class="row">
        <div class="col-8">
            <h3>Мои рецепты</h3>
        </div>
        <div class="col-4">
            <a href="/recipes/create" class="btn btn-primary btn-add">Добавить рецепт</a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Рецепт</th>
            <th scope="col">Описание</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{$recipe->name}}</td>
                <td>{{$recipe->description}}</td>
                <td>
                    <a href="/recipes/{{$recipe->id}}" class="icon"><i class="fa fa-eye"></i></a>
                    <a href="/recipes/{{$recipe->id}}/edit" class="icon"><i class="fa fa-edit"></i></a>

                    {{Form::open(['route'=>['recipes.destroy', $recipe->id], 'method'=>'delete'])}}
                        @csrf
                        <button type="submit" class="btn-remove icon">
                            <i class="fa fa-remove"></i>
                        </button>
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
