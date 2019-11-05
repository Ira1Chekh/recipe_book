@extends('layout')

@section('content')

    <div class="row">
        <div class="col-8">
            <h3>Ингредиенты</h3>
        </div>
        <div class="col-4">
            <a href="/ingredients/create" class="btn btn-primary btn-add">Добавить ингредиент</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Меню</th>
                <th scope="col">Действия</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ingredients as $ingredient)
            <tr>
                <td>{{$ingredient->name}}</td>
                <td>
                    <a href="/ingredients/{{$ingredient->id}}/edit" class="icon"><i class="fa fa-edit"></i></a>
                    {{Form::open(['route'=>['ingredients.destroy', $ingredient->id], 'method'=>'delete'])}}
                    @csrf
                    <button type="submit" class="btn-remove icon">
                        <i class="fa fa-remove"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
