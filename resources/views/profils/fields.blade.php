<!-- Prfl C Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PRFL_C_LIBELLE', 'Prfl C Libelle:') !!}
    {!! Form::text('PRFL_C_LIBELLE', null, ['class' => 'form-control']) !!}
</div>

<!-- Updaded At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updaded_at', 'Updaded At:') !!}
    {!! Form::date('updaded_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profils.index') !!}" class="btn btn-default">Cancel</a>
</div>
