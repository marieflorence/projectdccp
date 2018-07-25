<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('prospects*') ? 'active' : '' }}">
    <a href="{!! route('prospects.index') !!}"><i class="fa fa-edit"></i><span>Prospects</span></a>
</li>

<li class="{{ Request::is('produits*') ? 'active' : '' }}">
    <a href="{!! route('produits.index') !!}"><i class="fa fa-edit"></i><span>Produits</span></a>
</li>

<li class="{{ Request::is('profils*') ? 'active' : '' }}">
    <a href="{!! route('profils.index') !!}"><i class="fa fa-edit"></i><span>Profils</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('traitements*') ? 'active' : '' }}">
    <a href="{!! route('traitements.index') !!}"><i class="fa fa-edit"></i><span>Traitements</span></a>
</li>

<li class="{{ Request::is('gestionnaires*') ? 'active' : '' }}">
    <a href="{!! route('gestionnaires.index') !!}"><i class="fa fa-edit"></i><span>Gestionnaires</span></a>
</li>

<li class="{{ Request::is('agences*') ? 'active' : '' }}">
    <a href="{!! route('agences.index') !!}"><i class="fa fa-edit"></i><span>Agences</span></a>
</li>

<li class="{{ Request::is('descriptions*') ? 'active' : '' }}">
    <a href="{!! route('descriptions.index') !!}"><i class="fa fa-edit"></i><span>Descriptions</span></a>
</li>

