@extends('layouts.app')
@section('main')
    <article class="mb-3 mt-5 p-5">
        <img src="post-image/{{ $article->image }}" href="">
        <h2>{{ $article->title }}</h2>
        <h6>By : {{ $article->user->name }}</h6>
        <h5>{{ $article->content }}</h5>
        
        <a href="/">Back to Post</a>
    </article>
@endsection