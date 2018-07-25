<table class="table table-responsive" id="clients-table">
    <thead>
        <tr>
            <th>Nom</th>
        <th>Prenom</th>
        <th>Numero Client</th>
        <th>Numero Compte</th>
        <th>Adresse Client</th>
        <th>Telephone</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $clients)
        <tr>
            <td>{!! $clients->NOM !!}</td>
            <td>{!! $clients->PRENOM !!}</td>
            <td>{!! $clients->NUMERO_CLIENT !!}</td>
            <td>{!! $clients->NUMERO_COMPTE !!}</td>
            <td>{!! $clients->ADRESSE_CLIENT !!}</td>
            <td>{!! $clients->TELEPHONE !!}</td>
            <td>
                {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clients.show', [$clients->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clients.edit', [$clients->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>