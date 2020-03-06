<!-- Id-C Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id-c', 'Id-C:') !!}
    {!! Form::number('id-c', null, ['class' => 'form-control']) !!}
</div>

<!-- Id-Pr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id-pr', 'Id-Pr:') !!}
    {!! Form::number('id-pr', null, ['class' => 'form-control']) !!}
</div>

<!-- Id-Se Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id-se', 'Id-Se:') !!}
    {!! Form::number('id-se', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ventas.index') }}" class="btn btn-default">Cancel</a>
</div>
