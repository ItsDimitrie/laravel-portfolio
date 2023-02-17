@extends('layout')

@section('content')
    <div>
        <h1>Hello there, delete a post here!!</h1>
    </div>

    <form method="POST" action="/blogs/{{$article->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>


@endsection
