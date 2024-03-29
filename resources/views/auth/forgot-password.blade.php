@extends('layouts.app')
@section('main')
    <br>
    <br>
    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Your Email</label>
                        <input name="email" type="email" class="form-control shadow" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-primary">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-outline-danger">Send Riset Link</button>
                </form>
            </div>
        </div>
    </div>
@endsection
