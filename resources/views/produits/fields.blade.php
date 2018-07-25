<!-- Codeproduit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codeProduit', 'Codeproduit:') !!}
    {!! Form::text('codeProduit', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomproduit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomProduit', 'Nomproduit:') !!}
    {!! Form::text('nomProduit', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('produits.index') !!}" class="btn btn-default">Cancel</a>
</div>
