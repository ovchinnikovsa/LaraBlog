@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>
            <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
        </h2>
        {{ html()->modelForm($article, 'DELETE', route('articles.destroy', $article))->open() }}
        {{ html()->submit('удалить')->class('btn btn-primary') }}
        {{ html()->closeModelForm() }}
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach
@endsection

{{ $articles->links() }}
