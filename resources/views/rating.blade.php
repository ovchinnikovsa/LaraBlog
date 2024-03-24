@extends('layouts.app')

@section('title', 'Рейтинг статей')

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
