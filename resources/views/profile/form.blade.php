
<div class="form-group">

    {!! Form::label('name', 'Name:') !!}

    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>


<!-- Add Article Form input -->
<div class="form-group">

    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}

</div>