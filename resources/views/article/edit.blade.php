@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="row mt-5 p-5">
            <form method="POST" action="{{ url("articles/$article->slug") }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-md-8 col-sm-12 bg-white p-4">
                    <div class="form-group">
                        <input type="text" class="form-control fs-1" name="title" placeholder="Title"
                            value="{{ $article->title }}" />
                        @error('title')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea class="form-control mt-4" name="synopsis" rows="5" placeholder="Type the title">{{ $article->synopsis }}</textarea>
                        @error('synopsis')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea class="form-control mt-4" name="content" placeholder="Tell about the story" rows="15">{{ $article->content }}</textarea>
                        @error('content')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 p-4" style="height: 120px !important">
                    <div class="form-group col">
                        <button type="submit" class="btn btn-danger">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
