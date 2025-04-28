@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <h1>Содание статьи</h1>

    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
    @include('article.form')
    {{ html()->submit('Создать') }}
    {{ html()->closeModelForm() }}
@endsection
