@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prospects
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prospects, ['route' => ['prospects.update', $prospects->id], 'method' => 'patch']) !!}

                        @include('prospects.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection