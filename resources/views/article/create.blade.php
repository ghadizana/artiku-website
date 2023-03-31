@extends('layouts.app')
@section('main')
<div class="container" style="margin-top: 100px">
    <div class="row">
      <form method="POST" action="{{ url('/articles') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12 col-sm-12 bg-white p-4">          
            <div class="form-group">
              <!-- <label>Judul Artikel</label> -->
              <input type="text" class="form-control fs shadow" style="border-style: none" name="title" placeholder="Title" value="{{ old('title') }}"/>
              @error('title')
                  <span class="text-danger">
                    {{ $message }}
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <textarea class="form-control mt-4 shadow" style="border-style: none" name="synopsis" rows="5" placeholder="Type the synopsis here">{{ old('synopsis') }}</textarea>
              @error('synopsis')
                  <span class="text-danger">
                    {{ $message }}
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <!-- <label>My Story</label> -->
              <textarea class="form-control mt-4 fs shadow" style="border-style: none; " name="content" placeholder="Tell about the story" rows="6">{{ old('content') }}</textarea>
              @error('content')
                  <span class="text-danger">
                    {{ $message }}
                  </span>
              @enderror
            </div>

            <div class="mb-3">
              <!-- <label for="formFile" class="form-label">Default file input example</label> -->
              <input class="form-control mt-4 shadow" style="border-style: none" type="file" id="formFile" name="image"/>
              @error('image')
                  <span class="text-danger">
                    {{ $message }}
                  </span>
              @enderror
            </div>
        </div>
        <div class="col-md-4 col-sm-12 p-4" style="height: 120px !important">
          <div class="form-group col">
            <input type="submit" class="form-control btn btn-danger" value="Upload" />
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
