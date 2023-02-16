@extends('layout')

@section('content')
    <div>
        <h1>Hello there, create a post here!!</h1>
    </div>

    <form method="POST" action="/faq">
        @csrf

        <div class="field">
            <label class="label" for="Question">Question</label>

            <div class="control">
                <input class="input" type="text" name="Question" id="Question">
            </div>
        </div>

        <div class="field">
            <label class="label" for="answer">Answer</label>

            <div class="control">
                <input class="textarea" name="Answer" id="Answer">
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
