<!-- Idp Produits Field -->
<div class="form-group">
    {!! Form::label('idP_PRODUITS', 'Idp Produits:') !!}
    <p>{!! $produit->idP_PRODUITS !!}</p>
</div>

<!-- Codeproduit Field -->
<div class="form-group">
    {!! Form::label('codeProduit', 'Codeproduit:') !!}
    <p>{!! $produit->codeProduit !!}</p>
</div>

<!-- Nomproduit Field -->
<div class="form-group">
    {!! Form::label('nomProduit', 'Nomproduit:') !!}
    <p>{!! $produit->nomProduit !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $produit->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $produit->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $produit->updated_at !!}</p>
</div>

