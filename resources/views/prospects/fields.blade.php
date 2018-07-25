<!-- Posp Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Date', 'Posp Date:') !!}
    {!! Form::text('POSP_Date', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Nom', 'Posp Nom:') !!}
    {!! Form::text('POSP_Nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Prenom', 'Posp Prenom:') !!}
    {!! Form::text('POSP_Prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Numero Compte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Numero_Compte', 'Posp Numero Compte:') !!}
    {!! Form::number('POSP_Numero_Compte', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Employeur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Employeur', 'Posp Employeur:') !!}
    {!! Form::text('POSP_Employeur', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Niveau Revenu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Niveau_Revenu', 'Posp Niveau Revenu:') !!}
    {!! Form::text('POSP_Niveau_Revenu', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Banque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Banque', 'Posp Banque:') !!}
    {!! Form::text('POSP_Banque', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Agence De Depot Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Agence_de_Depot', 'Posp Agence De Depot:') !!}
    {!! Form::text('POSP_Agence_de_Depot', null, ['class' => 'form-control']) !!}
</div>

<!-- D Gestionnaire Gest C Code Gest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('D_GESTIONNAIRE_GEST_C_CODE_GEST', 'D Gestionnaire Gest C Code Gest:') !!}
    {!! Form::text('D_GESTIONNAIRE_GEST_C_CODE_GEST', null, ['class' => 'form-control']) !!}
</div>

<!-- Typecontrat Idtypecontrat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TypeContrat_idTypeContrat', 'Typecontrat Idtypecontrat:') !!}
    {!! Form::text('TypeContrat_idTypeContrat', null, ['class' => 'form-control']) !!}
</div>

<!-- P Profil Prfl N Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('P_PROFIL_PRFL_N_CODE', 'P Profil Prfl N Code:') !!}
    {!! Form::text('P_PROFIL_PRFL_N_CODE', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Telephone', 'Posp Telephone:') !!}
    {!! Form::text('POSP_Telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Cav Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_CAV', 'Posp Cav:') !!}
    {!! Form::text('POSP_CAV', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Disponibilite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Disponibilite', 'Posp Disponibilite:') !!}
    {!! Form::text('POSP_Disponibilite', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Agence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_Agence', 'Posp Agence:') !!}
    {!! Form::text('POSP_Agence', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Obscolombe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_ObsColombe', 'Posp Obscolombe:') !!}
    {!! Form::text('POSP_ObsColombe', null, ['class' => 'form-control']) !!}
</div>

<!-- Posp Obssgbs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('POSP_ObsSGBS', 'Posp Obssgbs:') !!}
    {!! Form::text('POSP_ObsSGBS', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prospects.index') !!}" class="btn btn-default">Cancel</a>
</div>
