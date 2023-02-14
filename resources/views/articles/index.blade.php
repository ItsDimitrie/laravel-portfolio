@extends ('layout')

@section ('content')

    @foreach($articles as $article)
        <div id="myblogs">
            <div>
                <h2>
                    <a href = "/blogs/{{ $article->id }}">{{ $article->title }}</a>
                </h2>
            </div>

            <img id="blogsfoto" src="/img/hzlogomainpage.png" alt="">

        </div>
    @endforeach
