@extends('layouts.app')

@section('content')

<div>
  <h1>{{ $recipe->recipe_title }}</h1>
  <img src={{ $recipe->img }} alt="">
  <p>{{ $recipe->content }}</p>
</div>

{!! link_to_route('recipes.edit', 'このレシピを編集', ['id' => $recipe->id]) !!}

@endsection