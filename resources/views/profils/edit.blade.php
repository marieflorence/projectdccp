@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Profil
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($profil, ['route' => ['profils.update', $profil->id], 'method' => 'patch']) !!}

                        @include('profils.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection