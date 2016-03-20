@extends('layouts.app')

@section('content')
    <div class="container">

    <h1>Write a New Project</h1>

    <hr>

    {!! Form::open(['url' => 'projects']) !!}

    @include('projects.form', ['submitButtonText' => 'Add Project'])

    {!! Form::close() !!}

    @include('errors.list')

    </div>

@stop