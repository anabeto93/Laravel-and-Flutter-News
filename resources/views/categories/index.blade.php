@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Category Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" value="{{ old('title') }}">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div> --}}
                    {{-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-3 mt-2 mb-2">
                        <div class="card">
                            <div class="card-body">
                                {{ $category->title }}
                            <span style="display: inline-block; width: 50px; height: 50px; background-color: {{ $category->color }}"></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection
