@extends('layout')

@section('content')
    <div>
        <h1>Hello there, create a post here!!</h1>
    </div>

    <form method="POST" action="/blogs">
        @csrf

        <div class="field">
            <label class="label" for="Title">Title</label>

            <div class="control">
                <input class="input" type="text" name="title" id="title">
            </div>
        </div>

        <div class="field">
            <label class="label" for="excerpt">Excerpt</label>

            <div class="control">
                <input class="textarea" name="excerpt" id="excerpt">
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Body</label>

            <div class="control">
                <input class="textarea" name="body" id="body">
            </div>
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Submit</button>
            </div>
        </div>
    </form>

@endsection
