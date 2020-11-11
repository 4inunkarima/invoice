@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('customers.index') !!}">Customer</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                
                                {!! Form::open(['route' => 'customers.store']) !!}

                                   @include('customers.fields')

                                {!! Form::close() !!}
           </div>
    </div>
@endsection
