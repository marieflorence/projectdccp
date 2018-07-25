<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOM', 'Nom:') !!}
    {!! Form::text('NOM', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PRENOM', 'Prenom:') !!}
    {!! Form::text('PRENOM', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Client Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMERO_CLIENT', 'Numero Client:') !!}
    {!! Form::text('NUMERO_CLIENT', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Compte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMERO_COMPTE', 'Numero Compte:') !!}
    {!! Form::text('NUMERO_COMPTE', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse Client Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ADRESSE_CLIENT', 'Adresse Client:') !!}
    {!! Form::text('ADRESSE_CLIENT', null, ['class' => 'form-control']) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TELEPHONE', 'Telephone:') !!}
    {!! Form::text('TELEPHONE', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clients.index') !!}" class="btn btn-default">Cancel</a>
</div>
