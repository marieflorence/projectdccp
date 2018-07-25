<!-- Trt N Num Appel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TRT_N_Num_Appel', 'Trt N Num Appel:') !!}
    {!! Form::text('TRT_N_Num_Appel', null, ['class' => 'form-control']) !!}
</div>

<!-- Trt N Date Appel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TRT_N_Date_Appel', 'Trt N Date Appel:') !!}
    {!! Form::date('TRT_N_Date_Appel', null, ['class' => 'form-control']) !!}
</div>

<!-- Trt Compterendu Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('TRT_CompteRendu', 'Trt Compterendu:') !!}
    {!! Form::textarea('TRT_CompteRendu', null, ['class' => 'form-control']) !!}
</div>

<!-- Trt C Flag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TRT_C_Flag', 'Trt C Flag:') !!}
    {!! Form::text('TRT_C_Flag', null, ['class' => 'form-control']) !!}
</div>

<!-- P Prospects Prospects Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('P_PROSPECTS_PROSPECTS_ID', 'P Prospects Prospects Id:') !!}
    {!! Form::number('P_PROSPECTS_PROSPECTS_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Statut Idstatut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Statut_idStatut', 'Statut Idstatut:') !!}
    {!! Form::number('Statut_idStatut', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('traitements.index') !!}" class="btn btn-default">Cancel</a>
</div>
