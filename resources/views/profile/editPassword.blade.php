@extends('layouts.app')

@section('content')
    <div class="container">

    <h1>Edit Password</h1>

    {!! Form::open( ['method' => 'PATCH', 'action' => 'UsersController@updatePassword']) !!}


    <div class="form-group">

        {!! Form::label('actualPassword', 'Actual password:') !!}

        {!! Form::text('actualPassword', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('password', 'New password:') !!}

        {!! Form::text('password', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('password_confirmation', 'Confirm new password:') !!}

        {!! Form::text('password_confirmation', null, ['class' => 'form-control']) !!}

    </div>


    <!-- Add Article Form input -->
    <div class="form-group">

        {!! Form::submit('Valider' ,['class' => 'btn btn-primary form-control']) !!}

    </div>

    {!! Form::close() !!}

    @include('errors.list')


    </div>


@stop