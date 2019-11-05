@extends('layout')

@section('content')

    <h3>Редактирование Ингредиента</h3>
    {!! Form::open(['route'=> ['ingredients.update', $ingredient->id],
            'method' => 'put']) !!}
        @csrf
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Название</label>
                <input type="hidden" name="author_id" value="{{auth()->id()}}">
                <input type="text" class="input" name="name"
                       value="{{$ingredient->name}}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-save">Обновить</button>

        @include('errors')
    {!! Form::close() !!}
@endsection
