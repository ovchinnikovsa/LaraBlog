@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <h2><a href="{{ route('articles.edit', $article) }}">Редактировать</a></h2>
    <div>{{$article->body}}</div>
@endsection
