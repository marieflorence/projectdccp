<table class="table table-responsive" id="profils-table">
    <thead>
        <tr>
            <th>Prfl C Libelle</th>
        <th>Updaded At</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($profils as $profil)
        <tr>
            <td>{!! $profil->PRFL_C_LIBELLE !!}</td>
            <td>{!! $profil->updaded_at !!}</td>
            <td>
                {!! Form::open(['route' => ['profils.destroy', $profil->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('profils.show', [$profil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('profils.edit', [$profil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>