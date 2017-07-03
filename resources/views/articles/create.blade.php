@extends('layout')

@section('content')

<h1>write a new article</h1>

@include('errors.form_errors')
    {!! Form::open(['route' => 'articles.store']) !!}
        @include('articles.form')
    {!! Form::close() !!}
@endsection