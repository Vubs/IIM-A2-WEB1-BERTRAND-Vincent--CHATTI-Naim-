@extends('layouts.app')

@section('content')

    <div class="container">

    <h1>Edit Name</h1>

    {!! Form::model($userInfos, ['method' => 'PATCH', 'action' => 'UsersController@updateName']) !!}

    @include('profile.form', ['submitButtonText' => 'Change Name'])


    {!! Form::close() !!}

    @include('errors.list')

    </div>


@stop