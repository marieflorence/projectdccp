<table class="table table-responsive" id="gestionnaires-table">
    <thead>
        <tr>
            <th>Gest C Nom</th>
        <th>Gest C Prenom</th>
        <th>Gest C Tel</th>
        <th>D Agence Agen C Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($gestionnaires as $gestionnaire)
        <tr>
            <td>{!! $gestionnaire->GEST_C_NOM !!}</td>
            <td>{!! $gestionnaire->GEST_C_PRENOM !!}</td>
            <td>{!! $gestionnaire->GEST_C_TEL !!}</td>
            <td>{!! $gestionnaire->D_AGENCE_AGEN_C_ID !!}</td>
            <td>
                {!! Form::open(['route' => ['gestionnaires.destroy', $gestionnaire->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('gestionnaires.show', [$gestionnaire->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('gestionnaires.edit', [$gestionnaire->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>