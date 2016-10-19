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
    <h3>New category</h3>

    <div class="alert">
        <p>       
        {!! Form::open(['action' => 'CategoryController@store'], ['method' => 'post']) !!}

        @include('partials.forms._category_edit_form', 
        ['submitButton' => 'Create category'])
                     
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

