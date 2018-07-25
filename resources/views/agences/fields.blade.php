<!-- Agen C Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_AGE', 'Agen C Age:') !!}
    {!! Form::text('AGEN_C_AGE', null, ['class' => 'form-control']) !!}
</div>

<!-- Agen C Agence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_AGENCE', 'Agen C Agence:') !!}
    {!! Form::text('AGEN_C_AGENCE', null, ['class' => 'form-control']) !!}
</div>

<!-- Agen C Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_ADRESSE', 'Agen C Adresse:') !!}
    {!! Form::text('AGEN_C_ADRESSE', null, ['class' => 'form-control']) !!}
</div>

<!-- Agen C Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_TEL', 'Agen C Tel:') !!}
    {!! Form::text('AGEN_C_TEL', null, ['class' => 'form-control']) !!}
</div>

<!-- Agen C Code Respo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_CODE_RESPO', 'Agen C Code Respo:') !!}
    {!! Form::text('AGEN_C_CODE_RESPO', null, ['class' => 'form-control']) !!}
</div>

<!-- Agen C Nom Respo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_NOM_RESPO', 'Agen C Nom Respo:') !!}
    {!! Form::text('AGEN_C_NOM_RESPO', null, ['class' => 'form-control']) !!}
</div>

<!-- Agen C Prenom Respo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_PRENOM_RESPO', 'Agen C Prenom Respo:') !!}
    {!! Form::text('AGEN_C_PRENOM_RESPO', null, ['class' => 'form-control']) !!}
</div>

<!-- Agen C Tel Respo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_TEL RESPO', 'Agen C Tel Respo:') !!}
    {!! Form::text('AGEN_C_TEL RESPO', null, ['class' => 'form-control']) !!}
</div>

<!-- Agen C Email Respo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGEN_C_EMAIL_RESPO', 'Agen C Email Respo:') !!}
    {!! Form::text('AGEN_C_EMAIL_RESPO', null, ['class' => 'form-control']) !!}
</div>

<!-- Uc Iduc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UC_idUC', 'Uc Iduc:') !!}
    {!! Form::number('UC_idUC', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('agences.index') !!}" class="btn btn-default">Cancel</a>
</div>
