@extends('layouts.app')
@section('main')
    
    <div class="container">
        <h1>
            All Posts
        </h1>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-6">
                    <div class="card mt-5" style="width: 34rem">
                        <img src="post-image/{{ $item->image }}" class="card-img-top " style="width:34rem; height:15rem"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <h6 class="card-text">By : {{ $item->user->name }}</h6>
                            <p class="card-text"><small class="text-muted">Last updated
                                    {{ $item->created_at->diffForHumans() }}
                                    mins ago</small></p>
                            <a href="{{ url("/articles/$item->slug") }}" class="btn btn-primary">Read More</a>
                            <form action="{{ url("/articles/$item->slug") }}" method="POST">
                                @csrf
                                @method('DELETE')
                                @if (Auth::user()->id == $item->user_id)
                                    <a href="{{ url("/articles/$item->slug/edit") }}"
                                        class="badge bg-info text-white">edit</a>
                                    <button type="sumbit" class="badge bg-danger text-white"
                                        style="border-style: none;">delete</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
