@extends ('layout')

@section ('content')

    <div style="padding-top: 80px " id="dashboardGeheel">
        <table class="styled-table">

            <thead>
            <tr>
                <th>Course Names</th>
                <th>Test Names</th>
                <th>Grade</th>
                <th>Passed at</th>
                <th>Updated At</th>
            </tr>
            </thead>

    @foreach($grades as $grade)
        <thead>
        <tr>
            <th>{{$grade->course_name}}</th>
            <th>{{$grade->test_name}}</th>
            <th>{{$grade->best_grade}}</th>
            <th>{{$grade->passed_at}}</th>
            <th>{{$grade->updated_at}}</th>
        </tr>
        </thead>

    @endforeach
        </table>
    </div>
@endsection
