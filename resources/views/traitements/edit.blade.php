@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Traitement
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($traitement, ['route' => ['traitements.update', $traitement->id], 'method' => 'patch']) !!}

                        @include('traitements.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection