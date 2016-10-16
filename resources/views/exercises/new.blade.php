@extends('layouts.app')

@section('page-title')

    <h3>Página de alertas</h3>
@endsection

@section('header')
    Php exercises
@endsection
@section('content')
    <h3>New exercise</h3>

    <div class="alert">
        <p>       
        {!! Form::open(['action' => 'ExerciseController@store'], ['method' => 'post']) !!}

        @include('partials.forms._exercise_edit_form', 
        ['submitButton' => 'Create exercise'])
                     
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

