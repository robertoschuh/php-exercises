@extends('layouts.app')

@section('page-title')

    <h3>Página de categorías</h3>
@endsection

@section('header_nav')
    @parent
@endsection

@section('sidebar_left')
      @parent
@endsection

@section('content')
    <h3>Categories</h3>

    <div><a href="/admin/category/new">Create category</a></div>
    <div class="categories">
        @foreach ($categories as $category)
            {{ $category->name }}
            {{ $category->description }}
        @endforeach
    </div>    


@endsection


@section('sidebar_right')
      @parent
@endsection

@section('footer')
    Piè de página
@endsection