@extends('layout')

@section('content')
    <div>
        <h1>Hello there, create a post here!!</h1>
    </div>

    <form method="POST" action="{{route('blogs.index')}}">
        @csrf
        <div class="field">
            <label class="label" for="Title">Title</label>

            <div class="control">
                <input class="input" type="text" name="title" id="title" value="{{ old('title') }}">

                @if ($errors->has('title'))
                <p class="error">{{ $errors->first('title') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="img_url">Afbeelding URL</label>

            <div class="control">
                <input class="textarea" name="img_url" id="img_url" value="{{ old('img_url') }}">

                @if ($errors->has('body'))
                    <p class="error">{{ $errors->first('body') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="excerpt">Excerpt</label>

            <div class="control">
                <input class="textarea" name="excerpt" id="excerpt" value="{{ old('excerpt') }}">

                @if ($errors->has('excerpt'))
                    <p class="error">{{ $errors->first('excerpt') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Body</label>

            <div class="control">
                <input class="textarea" name="body" id="body" value="{{ old('body') }}">

                @if ($errors->has('body'))
                    <p class="error">{{ $errors->first('body') }}</p>
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
