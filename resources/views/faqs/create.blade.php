@extends('layout')

@section('content')
    <div>
        <h1>Hello there, create a post here!!</h1>
    </div>

    <form method="POST" action="{{route('faq.index')}}">
        @csrf

        <div class="field">
            <label class="label" for="question">Question</label>

            <div class="control">
                <input class="input" type="text" name="question" id="question" value="{{ old('question') }}">

                @if ($errors->has('question'))
                    <p class="error">{{ $errors->first('question') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="answer">Answer</label>

            <div class="control">
                <input class="textarea" name="answer" id="answer" value="{{ old('answer') }}">

                @if ($errors->has('answer'))
                    <p class="error">{{ $errors->first('answer') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="link">Link</label>

            <div class="control">
                <input class="textarea" name="link" id="link" value="{{ old('link') }}">

                @if ($errors->has('link'))
                    <p class="error">{{ $errors->first('link') }}</p>
                @endif

            </div>
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Submit</button>
            </div>
        </div>
    </form>

@endsection
