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
                                <form method="post" action="{{route('statusPembayarans.store')}}">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="nama_status">{{ __('status.status_name') }}</label>
                                        <input type="text" name="nama_status" class="form-control" placeholder="{{ __('status.status_name') }}" required>
                                        <br/>
                                        <label for="urutan">{{ __('status.sequence') }}</label>
                                        <input type="text" name="urutan" class="form-control" placeholder="{{ __('status.sequence') }}" required>
                                        <br/>
                                        <button type="submit" class="btn btn-primary btn active" role="button" aria-pressed="true">{{ __('status.save') }}</button>
                                        <a href="{{ route('produks.index') }}" class="btn btn-secondary">{{ __('status.cancel') }}</a>
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
