@extends('layouts.app')

@section('content')

  <h1>レシピ一覧</h1>

  @if (count($recipes) > 0)
    @foreach ($recipes as $recipe)
    <!-- このリンクだとうまくいかない -->
      <h2>{!! link_to_route('recipes.show', $recipe->recipe_title, ['id' => $recipe->id]) !!}</h2>
      <img src={{ $recipe->img }} alt="">
      <p>{{ $recipe->content }}</p>
    @endforeach
  @endif

  <a href="/recipes/create">新規レシピの投稿</a>
  <!-- 以下のようにするとリンクがhttps://localhost/recipes/createとなり、うまくつながらない -->
  <!-- {!! link_to_route('recipes.create', '新規レシピの投稿', [], []) !!} -->

@endsection