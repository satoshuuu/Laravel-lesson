@extends('layouts.app')

@section('content')

<h1>{{ $recipe->recipe_title }} のレシピ編集ページ</h1>

<div>
  {!! Form::model($recipe, ['route' => ['recipes.update', $recipe->id], 'method' => 'put']) !!}

  <div>
    {!! Form::label('recipe_title', 'レシピ名：') !!}
    {!! Form::text('recipe_title', null, []) !!}

    {!! Form::label('content', '内容：') !!}
    {!! Form::text('content', null, []) !!}

    {!! Form::label('img', '画像(バイナリデータ)：') !!}
    {!! Form::text('img', null, []) !!}
  </div>

  {!! Form::submit('更新') !!}

  {!! Form::close() !!}
</div>

@endsection