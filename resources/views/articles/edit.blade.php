@extends('layout')

@section('content')
    <div>
        <h1>Hello there, edit a post here!!</h1>
    </div>

    <form method="POST" action="{{route('blogs.show', $article)}}">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label" for="Title">Update article</label>

            <div class="control">
                <input class="input" type="text" name="title" id="title" value="{{$article->title}}"></input>
            </div>
        </div>

        <div class="field">
            <label class="label" for="excerpt">Excerpt</label>

            <div class="control">
                <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Body</label>

            <div class="control">
                <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
            </div>
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Edit</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/blogs/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <button id="blogbutton" type="submit">Delete</button>
    </form>


@endsection
