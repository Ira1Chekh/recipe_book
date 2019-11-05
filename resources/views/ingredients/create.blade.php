@extends('layout')

@section('content')

    <h3>Добавление Ингредиента</h3>
    {!! Form::open(['route'=>'ingredients.store']) !!}
        @csrf
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Название</label>
                <input type="hidden" name="author_id" value="{{auth()->id()}}">
                <input type="text" class="input {{$errors->has('name') ? 'is-danger' : ''}}" name="name"
                       value="{{old('name')}}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-save">Сохранить</button>

        @include('errors')
    {!! Form::close() !!}

@endsection
