@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('produks.index') !!}">Produk</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
    <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                
                                {!! Form::open(['route' => 'produks.store']) !!}

                                   @include('produks.fields')

                                {!! Form::close() !!}
           </div>
    </div>
@endsection
