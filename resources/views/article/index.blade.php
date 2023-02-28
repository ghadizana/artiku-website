@extends('layouts.app')
@section('main')
    @foreach ($data as $item)
        <div class="row">
            <div class="card mb-3 p-3">
                <img src="#" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->synopsis }}</p>
                    <a href="{{ url("/articles/$item->id") }}" class="btn btn-primary">Read More</a>
                </div>
                <div class="group-action mr-3">
                    <form action="{{ url("/articles/$item->id") }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ url("/articles/$item->id/edit") }}" class="badge bg-info text-white">edit</a>
                        <button type="sumbit" class="badge bg-danger text-white"
                            style="border-style: none;">delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
