@extends('layout')

@section('content')
    <h3>Добавление Рецепта</h3>
    {!! Form::open(['route'=>'recipes.store']) !!}
        @csrf
        <div class="col-md-8">
            <div class="form-group">
                <input type="hidden" name="author_id" value="{{auth()->id()}}">

                <label for="name">Название</label>
                <input type="text" class="input {{$errors->has('name') ? 'is-danger' : ''}}" name="name"
                       value="{{old('name')}}" required>
            </div>

            <div class="form-group">
                <label for="name">Описание</label>
                <textarea name="description" id="" cols="50" rows="5" class="form-control"
                          value="{{old('description')}}" required></textarea>
            </div>

            <div class="form-group">
                <label>Ингредиент</label>
                {{Form::select('ingredients[]',
                    $ingredients,
                    null,
                    ['class' => 'form-control select2',
                        'multiple' => 'multiple',
                        'data-placeholder' => 'Выберите ингредиенты'])
                    }}
            </div>

        </div>

        <button type="submit" class="btn btn-primary btn-save">Сохранить рецепт</button>

        @include('errors')
    {!! Form::close() !!}
@endsection
