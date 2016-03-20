
<div class="form-group">

    {!! Form::label('title', 'Title:') !!}

    {!! Form::text('title', null, ['class' => 'form-control']) !!}

</div>

<!-- Body form input -->
<div class="form-group">

    {!! Form::label('name', 'Nom commanditaire:') !!}

    {!! Form::textarea('name', null, ['class' => 'form-control']) !!}

</div>

<!-- Published_at form input -->
<div class="form-group">

    {!! Form::label('published_at', 'Published On:') !!}

    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

</div>



<div class="form-group">

    {!! Form::label('client_adress', 'Votre adresse:') !!}

    {!! Form::textarea('client_adress', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('email', 'Votre mail:') !!}

    {!! Form::textarea('email', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('tel', 'Votre numéro:') !!}

    {!! Form::textarea('tel', null, ['class' => 'form-control']) !!}

</div>


<!-- Add Article Form input -->
<div class="form-group">

    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}

</div>