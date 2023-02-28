@extends('layouts.app')
@section('main')
    <article class="mb-3">
        <img src="" alt="" href="{{ $data->image }}">
        <h2>{{ $data->title }}</h2>
        <h5>{{ $data->content }}</h5>
    </article>
@endsection