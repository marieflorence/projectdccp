<!-- Gest C Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('GEST_C_NOM', 'Gest C Nom:') !!}
    {!! Form::text('GEST_C_NOM', null, ['class' => 'form-control']) !!}
</div>

<!-- Gest C Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('GEST_C_PRENOM', 'Gest C Prenom:') !!}
    {!! Form::text('GEST_C_PRENOM', null, ['class' => 'form-control']) !!}
</div>

<!-- Gest C Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('GEST_C_TEL', 'Gest C Tel:') !!}
    {!! Form::text('GEST_C_TEL', null, ['class' => 'form-control']) !!}
</div>

<!-- D Agence Agen C Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('D_AGENCE_AGEN_C_ID', 'D Agence Agen C Id:') !!}
    {!! Form::number('D_AGENCE_AGEN_C_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('gestionnaires.index') !!}" class="btn btn-default">Cancel</a>
</div>
