@extends('layouts.app')
@section('main')
    <br>
    <div class="container mt-5 p-3">
        <div class="row">
            <div class="col-md-4">
                <h1>
                    All Posts
                </h1>
            </div>

            <div class="col-md-4">
                <a href="{{ url('/articles/data/create') }}" class="btn btn-outline-success rounded-pill shadow">Add Blog</a>
            </div>
        </div>

        <div class="row">
            @foreach ($article as $item)
                <div class="col-md-6 mb-3">
                    <div class="card bg-primmary-bg-subtle" style="width: 34rem">
                        <img src="post-image/{{ $item->image }}" class="card-img-top " style="width:34rem; height:15rem"
                            alt="...">
                        <div class="card-body">

                            <h5 class="card-title">{{ $item->title }}</h5>
                            <h6 class="card-text">By : {{ $item->user->name }}</h6>
                            <p class="card-text"><small class="text-muted">Last updated
                                    {{ $item->created_at->diffForHumans() }}
                                    mins ago</small>
                            </p>

                            <div class="row">
                                <div class="col-md-3">
                                    <a href="{{ url("/articles/$item->slug") }}" class="btn btn-danger text-white">Read
                                        More</a>
                                </div>

                                <div class="col-md-4">
                                    <form action="{{ url("/articles/$item->slug") }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        @if (Auth::user()->id == $item->user_id)
                                            <a href="{{ url("/articles/$item->slug/edit") }}"
                                                class="badge bg-warning text-white" style="text-decoration: none;">edit</a>
                                            <button type="sumbit" class="badge bg-primary text-white"
                                                style="border-style: none;">delete</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
