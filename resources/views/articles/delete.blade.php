@extends('layout')

@section('content')
    <div>
        <h1>Hello there, delete a post here!!</h1>
    </div>

    <form method="POST" action="{{route('blogs.show', $article)}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>


@endsection
