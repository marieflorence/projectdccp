<!-- Iddescription Field -->
<div class="form-group">
    {!! Form::label('idDescription', 'Iddescription:') !!}
    <p>{!! $description->idDescription !!}</p>
</div>

<!-- Libdescription Field -->
<div class="form-group">
    {!! Form::label('libDescription', 'Libdescription:') !!}
    <p>{!! $description->libDescription !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $description->created_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $description->deleted_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $description->updated_at !!}</p>
</div>

