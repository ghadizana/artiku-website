@extends('layouts.app')
@section('main')
    <br>
    <br>
    <div class="row m-5">
        <div class="card bg-light-primmary-bg-subtle" style="width: 84rem">
            <article class="mb-3 mt-3 p-1">
                <h2>{{ $article->title }}</h2>
                <h6>Author : {{ $article->user->name }}</h6>
                <p class="mt-5">{{ $article->content }}</p>

                <a href="/">Back to Post</a>
            </article>
        </div>
    </div>
@endsection
