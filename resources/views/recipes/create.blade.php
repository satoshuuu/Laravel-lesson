@extends('layouts.app')

@section('content')

<h1>新規レシピの投稿</h1>

<div>
  {!! Form::model($recipe, ['route' => 'recipes.store']) !!}

    <div>
      {!! Form::label('recipe_title', 'レシピ名：') !!}
      {!! Form::text('recipe_title', null, []) !!}

      {!! Form::label('content', '内容：') !!}
      {!! Form::text('content', null, []) !!}

      {!! Form::label('img', '画像(バイナリデータ)：') !!}
      {!! Form::text('img', null, []) !!}
    </div>

    {!! Form::submit('投稿') !!}

  {!! Form::close() !!}
</div>

@endsection