@extends('layouts.app')

@section('page-title')

    <h3>Página de alertas</h3>
@endsection

@section('header')
    Php exercises
@endsection
@section('content')
    <h3>Edit exercise # {{ $exercise['id'] }}</h3>

    <div class="alert">
        <p>
            PHP exercises, sometime is easy forget, this kind of exercises are good to refresh your PHP skills. 
        {!! Form::model($exercise, ['method' => 'PUT', 
        'action' => ['ExerciseController@update', $exercise->id]])
        !!}

        @include('partials.forms._exercise_edit_form', 
        ['submitButton' => 'Save changes'])
                     
        {!! Form::close() !!}
               
        </p>
    </div>


@endsection

@section('sidebar')
      @include('partials._exercises_menu')

@endsection

@section('footer')

    Piè de página
@endsection

