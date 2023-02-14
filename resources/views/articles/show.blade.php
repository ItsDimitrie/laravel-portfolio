@extends ('layout');

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Articles</title>
    </head>

    <div id="content">
        <div class="title">
            <h2>{{ $article->title }}</h2>
        </div>
    </div>

    <p>
        <img src="/img/Choises.png"/>
    </p>

    <p>
        {{ $article->body }}
    </p>

@endsection

