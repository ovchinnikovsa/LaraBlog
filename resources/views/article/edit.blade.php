@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <h1>Редактирование статьи</h1>

    {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
    @include('article.form')
    {{ html()->submit('Обновить')->class('btn btn-primary') }}
    {{ html()->closeModelForm() }}
@endsection
