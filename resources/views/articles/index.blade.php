@extends('app')

@section('content')

    <h1>Articles</h1>

    @foreach($articles as $article)
        <article>

            {{-- Dans le lien, on utilise la methode action on passe en premier parametre le controller et la méthode show, puis un array avec les params--}}
            <h2>

                <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>
            </h2>


            <div class="body">{{ $article->body }}</div>

            @if(Auth::user()->id == $article->user_id)

            {!! Form::open(['url' => route('articles.destroy', $article->id), 'method' => 'delete', 'class' => 'pull-right']) !!}
            <button type="submit" class="btn btn-danger">Delete</button>
            {!! Form::close() !!}
            @endif

        </article>
    @endforeach

@stop