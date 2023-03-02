@extends('layout')

@section('content')
    <div>
        <h1>Hello there, create a grade here!!</h1>
    </div>

    <form method="POST" action="{{route('grades.index')}}">
        @csrf
        <div class="field">
            <label class="label" for="course_name">Course Name</label>

            <div class="control">
                <input class="input" type="text" name="course_name" id="course_name" value="{{ old('course_name') }}">

                @if ($errors->has('course_name'))
                    <p class="error">{{ $errors->first('course_name') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="test_name">Test Name</label>

            <div class="control">
                <input class="textarea" name="test_name" id="test_name" value="{{ old('test_name') }}">

                @if ($errors->has('test_name'))
                    <p class="error">{{ $errors->first('test_name') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="best_grade">Best Grade</label>

            <div class="control">
                <input class="textarea" name="best_grade" id="best_grade" value="{{ old('best_grade') }}">

                @if ($errors->has('best_grade'))
                    <p class="error">{{ $errors->first('best_grade') }}</p>
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
