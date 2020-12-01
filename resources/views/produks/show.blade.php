@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('produks.index') }}">{{ __('produk.produk') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ __('produk.detail') }}</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>{{ __('produk.detail') }}</strong>
                                  <a href="{{ route('produks.index') }}" class="btn btn-light">{{ __('produk.back') }}</a>
                             </div>
                             <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('produk.product_name') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->nama_produk}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('produk.product_type') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->jenis_produk}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('produk.stock') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->stok}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('produk.description') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->deskripsi_produk}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('produk.prices') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->harga_produk}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('produk.note') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->catatan}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('produk.date') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->created_at}}</p> 
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
