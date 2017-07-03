@extends('layout')

@section('content')
    <h1>{{ $article->title }}</h1>

    <article>
        <div class="body">
            {{ $article->body }}
        </div>
    </article>
    @if (Auth::check())
        <br\>
        {!! link_to(action('ArticlesController@edit', [$article->id]), '編集', ['class' => 'btn btn-primary']) !!}
        <br>
        {!! delete_form(['articles',$article->id]) !!}
    @endif

@endsection('content')