@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('statusPembayarans.index') }}">{{ __('status.st_pembayaran') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ __('status.detail') }}</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>{{ __('status.detail') }}</strong>
                                  <a href="{{ route('statusPembayarans.index') }}" class="btn btn-light">{{ __('status.back') }}</a>
                             </div>
                             <div class="card-body">
                             <form>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('status.status_name') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{ $statusPembayaran->nama_status }}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('status.sequence') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{ $statusPembayaran->urutan }}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('status.created_at') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$statusPembayaran->created_at}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('status.updated_at') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$statusPembayaran->updated_at}}</p> 
                                        </div>
                                    </div>
                                </form>    
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
