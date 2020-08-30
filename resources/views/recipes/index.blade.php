@extends('layouts.app')

@section('content')

  <h1>レシピ一覧</h1>

  @if (count($recipes) > 0)
    @foreach ($recipes as $recipe)
      <h2>{{ $recipe->recipe_title }}</h2>
      <img src={{ $recipe->img }} alt="">
      <p>{{ $recipe->content }}</p>
    @endforeach
  @endif

@endsection