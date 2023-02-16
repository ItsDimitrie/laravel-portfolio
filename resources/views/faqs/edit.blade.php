@extends('layout')

@section('content')
    <div>
        <h1>Hello there, edit a post here!!</h1>
    </div>

    <form method="POST" action="/faq/{{$faq->id}}">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label" for="Question">Update Faq</label>

            <div class="control">
                <input class="input" type="text" name="question" id="question" value="{{$faq->question}}"></input>
            </div>
        </div>

        <div class="field">
            <label class="label" for="answer">Answer</label>

            <div class="control">
                <textarea class="textarea" name="answer" id="answer">{{$faq->answer}}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="link">Link</label>

            <div class="control">
                <textarea class="textarea" name="link" id="link">{{$faq->link}}</textarea>
            </div>
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Submit</button>
            </div>
        </div>
    </form>


@endsection
