@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('statusPembayarans.index') !!}">{{ __('status.st_pembayaran')}}</a>
      </li>
      <li class="breadcrumb-item active">{{ __('status.create')}}</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>{{ __('status.create_pembayaran')}}</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'statusPembayarans.store']) !!}

                                   @include('status_pembayarans.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
