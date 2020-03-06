<!-- Id-Se Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id-se', 'Id-Se:') !!}
    {!! Form::text('id-se', null, ['class' => 'form-control']) !!}
</div>

<!-- Productos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productos', 'Productos:') !!}
    {!! Form::text('productos', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('servios.index') }}" class="btn btn-default">Cancel</a>
</div>
