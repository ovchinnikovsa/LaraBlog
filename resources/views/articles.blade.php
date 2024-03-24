@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
<ul> 
    @foreach ($articles as $article)
        <li>
            <b>{{ $article['name'] }}</b>
            :
            {{ $article['body'] }}
        </li>
    @endforeach
</ul>
@endsection
