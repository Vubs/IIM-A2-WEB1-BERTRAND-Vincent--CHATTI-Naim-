@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Projects</h1>

        @foreach($projects as $project)
            <article>

                {{-- Dans le lien, on utilise la methode action on passe en premier parametre le controller et la méthode show, puis un array avec les params--}}
                <h2>

                    <a href="{{ action('ArticlesController@show', [$project->id]) }}">{{ $project->title }}</a>
                    <a href="{{ action('ArticlesController@edit', [$project->id]) }}">Edit</a>

                </h2>


                <div class="body">{{ $project->name }}</div>

                <p>{{ $project->client_adress }}</p>

                <p>{{ $project->email }}</p>


                <p>{{ $project->tel }}</p>


            </article>
        @endforeach

    </div>

@stop