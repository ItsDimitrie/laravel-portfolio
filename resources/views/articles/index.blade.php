@extends ('layout')

@section ('content')

    @foreach($articles as $article)
        <div id="myblogs">
            <div>
                <h2>
                    <a href = "{{ route('blogs.show', $article) }}">{{$article->title}}</a>
                </h2>
            </div>

            <div id="blogsfoto" style="background: url('{{$article->img_url}}') center center; background-size: cover;">
    </div>

            <button><a href="/blogs/{{$article->id}}" class="button is-primary">Read more...</a></button>
            <button><a href="/blogs/{{$article->id}}/edit" class="button is-primary">Edit Article...</a></button>

        </div>
    @endforeach
