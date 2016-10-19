@extends('layouts.app')

@section('page-title')

    <h3>Página de categoría</h3>
@endsection

@section('header_nav')
    @parent
@endsection

@section('sidebar_left')
      @parent

@endsection

@section('content')
    <h3>Edit category # {{ $exercise['id'] }}</h3>

    <div class="alert">
        <p>
            sssss ss sforget, this kind of exercises are good to refresh your PHP skills. 
        {!! Form::model($category, ['method' => 'PUT', 
        'action' => ['CategoryController@update', $exercise->id]])
        !!}

        @include('partials.forms._category_edit_form', 
        ['submitButton' => 'Save changes'])
                     
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

