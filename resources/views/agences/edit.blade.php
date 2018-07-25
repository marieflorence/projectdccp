@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agence
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($agence, ['route' => ['agences.update', $agence->id], 'method' => 'patch']) !!}

                        @include('agences.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection