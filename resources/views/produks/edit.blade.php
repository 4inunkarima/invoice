@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('produks.index') !!}">Produk</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             
                              {!! Form::model($produk, ['route' => ['produks.update', $produk->id], 'method' => 'patch']) !!}

                              @include('produks.fields')

                              {!! Form::close() !!}
         </div>
    </div>
@endsection