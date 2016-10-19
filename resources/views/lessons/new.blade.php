@extends('layouts.app')

@section('page-title')

    <h3>Página de alertas</h3>
@endsection

@section('header_nav')
    @parent
@endsection

@section('sidebar_left')
      @parent

@endsection


@section('content')
    <h3>New lesson</h3>

    <div class="alert">
        <p>       
        {!! Form::open(['action' => 'LessonController@store'], ['method' => 'post']) !!}

        @include('partials.forms._lesson_edit_form', 
        ['submitButton' => 'Create lesson'])
                     
        {!! Form::close() !!}
               
        </p>
    </div>


@endsection


@section('sidebar_right')
      @parent

@endsection



@section('footer')

    Piè de página
@endsection

