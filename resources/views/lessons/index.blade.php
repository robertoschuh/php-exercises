@extends('layouts.app')

@section('page-title')

    <h3>Página de alertas</h3>
@endsection

@section('header')
@endsection
@section('content')
    <h3>Lessons</h3>

    @if( count($lessons) > 0 )
    <div class="lesson">
        @include('partials._lessons')
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

