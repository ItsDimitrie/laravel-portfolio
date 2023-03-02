@extends('layout')

@section('content')
    <div>
        <h1>Hello there, edit a grade here!!</h1>
    </div>

    <form method="POST" action="{{route('grades.show', $grades)}}">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label" for="course_name">Course Name</label>

            <div class="control">
                <textarea class="textarea" name="course_name" id="course_name">{{$grades->course_name}}</textarea>

                @if ($errors->has('course_name'))
                    <p class="error">{{ $errors->first('course_name') }}</p>
                @endif
            </div>
        </div>

        <div class="field">
            <label class="label" for="test_name">Test Name</label>

            <div class="control">
                <textarea class="textarea" name="test_name" id="test_name">{{$grades->test_name}}</textarea>

                @if ($errors->has('test_name'))
                    <p class="error">{{ $errors->first('test_name') }}</p>
                @endif
            </div>
        </div>

        <div class="field">
            <label class="label" for="best_grade">Best Grade</label>

            <div class="control">
                <textarea class="textarea" name="best_grade" id="best_grade">{{$grades->best_grade}}</textarea>

                @if ($errors->has('best_grade'))
                    <p class="error">{{ $errors->first('best_grade') }}</p>
                @endif
            </div>
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Edit</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/grades/{{ $grades->id }}">
        @csrf
        @method('DELETE')
        <button id="blogbutton" type="submit">Delete</button>
    </form>

@endsection
