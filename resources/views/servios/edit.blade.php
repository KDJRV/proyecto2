@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Servios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($servios, ['route' => ['servios.update', $servios->id], 'method' => 'patch']) !!}

                        @include('servios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection