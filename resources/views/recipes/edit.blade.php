@extends('layout')

@section('content')

    <h3>Редактирование Рецепта</h3>
    {!! Form::open(['route'=> ['recipes.update', $recipe->id],
            'method' => 'put']) !!}
        @csrf
        <div class="col-md-6">
            <div class="form-group">
                <input type="hidden" name="author_id" value="{{auth()->id()}}">
                <label for="name">Название</label>
                <input type="text" class="input" name="name"
                       value="{{$recipe->name}}" required>

                <div class="form-group">
                    <label for="name">Описание</label>
                    <textarea name="description" id="" cols="50" rows="5" class="form-control"
                              required>{{$recipe->description}}</textarea>
                </div>

                <div class="form-group">
                    <label>Ингредиент</label>
                    {{Form::select('ingredients[]',
                    $ingredients,
                    $selectedIngredients,
                    ['class' => 'form-control select2',
                        'multiple' => 'multiple',
                        'data-placeholder' => 'Выберите ингредиенты'])
                    }}
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Обновить</button>

        @include('errors')
    {!! Form::close() !!}

@endsection
