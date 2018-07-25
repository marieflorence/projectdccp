<style>
    
    .table td{
        font-size: 12px;
    }
</style>
<table class="table table-responsive" id="myTable">
    <thead>
        <tr>
            <th>Date</th>
        <th>Nom</th>
        <!--th>Prenom</th-->
        <!--th>Numero Compte</th-->
        <th>Employeur</th>
        <!--th>Niveau Revenu</th>
        <th>Banque</th>
        <th>Agence De Depot</th>
        <th>D Gestionnaire Gest C Code Gest</th>
        <th>Typecontrat Idtypecontrat</th>
        <th>P Profil Prfl N Code</th>
        <th>Telephone</th>
        <th>Cav</th>
        <th>Disponibilite</th-->
        <th>Agence</th>
        <th>Obscolombe</th>
        <!--th>Obssgbs</th-->
            <th >Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prospects as $prospects)
        <tr>
            <td>{!! $prospects->POSP_Date !!}</td>
            <td>{!! $prospects->POSP_Nom !!}</td>
            <!--td>{!! $prospects->POSP_Prenom !!}</td-->
            <!--td>{!! $prospects->POSP_Numero_Compte !!}</td-->
            <td>{!! $prospects->POSP_Employeur !!}</td>
           <!--td>{!! $prospects->POSP_Niveau_Revenu !!}</td>
            <td>{!! $prospects->POSP_Banque !!}</td>
            <td>{!! $prospects->POSP_Agence_de_Depot !!}</td>
            <td>{!! $prospects->D_GESTIONNAIRE_GEST_C_CODE_GEST !!}</td>
            <td>{!! $prospects->TypeContrat_idTypeContrat !!}</td>
            <td>{!! $prospects->P_PROFIL_PRFL_N_CODE !!}</td>
            <td>{!! $prospects->POSP_Telephone !!}</td>
            <td>{!! $prospects->POSP_CAV !!}</td>
            <td>{!! $prospects->POSP_Disponibilite !!}</td-->
            <td>{!! $prospects->POSP_Agence !!}</td>
            <td>{!! $prospects->POSP_ObsColombe !!}</td>
            <!--td>{!! $prospects->POSP_ObsSGBS !!}</td-->
            <td>
                {!! Form::open(['route' => ['prospects.destroy', $prospects->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prospects.show', [$prospects->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prospects.edit', [$prospects->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>