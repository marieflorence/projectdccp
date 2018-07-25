<table class="table table-responsive" id="traitements-table">
    <thead>
        <tr>
            <th>Trt N Num Appel</th>
        <th>Trt N Date Appel</th>
        <th>Trt Compterendu</th>
        <th>Trt C Flag</th>
        <th>P Prospects Prospects Id</th>
        <th>Statut Idstatut</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($traitements as $traitement)
        <tr>
            <td>{!! $traitement->TRT_N_Num_Appel !!}</td>
            <td>{!! $traitement->TRT_N_Date_Appel !!}</td>
            <td>{!! $traitement->TRT_CompteRendu !!}</td>
            <td>{!! $traitement->TRT_C_Flag !!}</td>
            <td>{!! $traitement->P_PROSPECTS_PROSPECTS_ID !!}</td>
            <td>{!! $traitement->Statut_idStatut !!}</td>
            <td>
                {!! Form::open(['route' => ['traitements.destroy', $traitement->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('traitements.show', [$traitement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('traitements.edit', [$traitement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>