@extends('layout')

@section('content')
    <div>
        <h1>Hello there, create a post here!!</h1>
    </div>

    <form method="POST" action="/faq">
        @csrf

        <div class="field">
            <label class="label" for="question">Question</label>

            <div class="control">
                <input class="input" type="text" name="question" id="question">
            </div>
        </div>

        <div class="field">
            <label class="label" for="answer">Answer</label>

            <div class="control">
                <input class="textarea" name="answer" id="answer">
            </div>
        </div>

        <div class="field">
            <label class="label" for="link">Link</label>

            <div class="control">
                <input class="textarea" name="link" id="link">
            </div>
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Submit</button>
            </div>
        </div>
    </form>

@endsection
