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
        @foreach ($exercises as $exercise)
            <p>Category: {{ $exercise['category'] }}</p>
            <p>{{ $exercise['title'] }}</p>
            <p>{{ $exercise['body'] }}</p>
            <p>{{ $exercise['solution'] }}</p>
        @endforeach
    @else
    <p>
        PHP exercises, sometime is easy forget, this kind of exercises are good to refresh your PHP skills.       
    </p>
    @endif

@endsection

@section('sidebar')

     <ul>
            <li><a href="/array-basic">Array basic</a></li>
            <li><a href="/array-bidimensional">Array bidimensional</a></li>
            <li><a href="/array-multidimensional">Array multidimensional</a></li>
            <li><a href="/sort-array">Sort array</a></li>
            <li><a href="/multidimensional-sort-array">Sort multidimensional array</a></li>
            
    </ul>
@endsection

@section('footer')

    Piè de página
@endsection

