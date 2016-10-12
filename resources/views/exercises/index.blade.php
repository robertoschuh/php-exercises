@extends('layouts.app')

@section('page-title')

    <h3>Página de alertas</h3>
@endsection

@section('header')
    Php exercises
@endsection
@section('content')
    <h3>Exercises</h3>

    @if( count($exercises) > 0 )
    <div class="exercise">
        @include('partials._exercises')
    </div>    
    @else
    <div class="alert">
        <p>
            PHP exercises, sometime is easy forget, this kind of exercises are good to refresh your PHP skills.       
        </p>
    </div>
    @endif

@endsection

@section('sidebar')
      @include('partials._exercises_menu')

@endsection

@section('footer')

    Piè de página
@endsection

