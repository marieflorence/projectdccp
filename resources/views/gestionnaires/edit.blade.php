@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Gestionnaire
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($gestionnaire, ['route' => ['gestionnaires.update', $gestionnaire->id], 'method' => 'patch']) !!}

                        @include('gestionnaires.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection