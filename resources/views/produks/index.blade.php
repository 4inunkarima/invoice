@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Produk</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Produk
                             <a class="pull-right" href="{{ route('produks.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                        @section('css')
                            @include('layouts.datatables_css')
                        @endsection

                        {!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

                        @push('scripts')
                            @include('layouts.datatables_js')
                        {!! $dataTable->scripts() !!}
                        @endpush
                            
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
