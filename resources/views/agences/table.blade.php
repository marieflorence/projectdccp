<table class="table table-responsive" id="agences-table">
    <thead>
        <tr>
            <th>Agen C Age</th>
        <th>Agen C Agence</th>
        <th>Agen C Adresse</th>
        <th>Agen C Tel</th>
        <th>Agen C Code Respo</th>
        <th>Agen C Nom Respo</th>
        <th>Agen C Prenom Respo</th>
        <th>Agen C Tel Respo</th>
        <th>Agen C Email Respo</th>
        <th>Uc Iduc</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($agences as $agence)
        <tr>
            <td>{!! $agence->AGEN_C_AGE !!}</td>
            <td>{!! $agence->AGEN_C_AGENCE !!}</td>
            <td>{!! $agence->AGEN_C_ADRESSE !!}</td>
            <td>{!! $agence->AGEN_C_TEL !!}</td>
            <td>{!! $agence->AGEN_C_CODE_RESPO !!}</td>
            <td>{!! $agence->AGEN_C_NOM_RESPO !!}</td>
            <td>{!! $agence->AGEN_C_PRENOM_RESPO !!}</td>
            <td>{!! $agence->AGEN_C_TEL_RESPO !!}</td>
            <td>{!! $agence->AGEN_C_EMAIL_RESPO !!}</td>
            <td>{!! $agence->UC_idUC !!}</td>
            <td>
                {!! Form::open(['route' => ['agences.destroy', $agence->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('agences.show', [$agence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('agences.edit', [$agence->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>