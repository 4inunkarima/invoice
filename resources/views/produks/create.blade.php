@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('produks.index') !!}">{{ __('produk.produk') }}</a>
      </li>
      <li class="breadcrumb-item active">{{ __('produk.create') }}</li>
    </ol>
    <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i> 
                                <strong>{{ __('produk.create_produk') }}</strong>
                            </div>
                            <div class="card-body">
                              <form method="post" action="{{route('produks.store')}}">
                              @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="nama_produk">{{ __('produk.product_name') }}</label>
                                        <input type="text" name="nama_produk" class="form-control" placeholder="{{ __('produk.product_name') }}">
                                        <br/>
                                        <label for="jenis_produk">{{ __('produk.product_type') }}</label>
                                        <input type="text" class="form-control" name="jenis_produk" placeholder="{{ __('produk.product_type') }}">
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="stok">{{ __('produk.stock') }}</label>
                                        <div class="input-group mb-3">
                                           <input type="text" class="form-control" name="stok" placeholder="{{ __('produk.stock') }}"> 
                                            <div class="input-group-prepend">
                                            <!-- <select id="inputState" class="input-group-text">
                                                <option selected>{{ __('produk.choose') }}</option>
                                                <option>/Pcs</option>
                                                <option>/Lusin</option>
                                            </select> -->
                                            </div>
                                        </div>
                                        <br/>
                                        <label for="deskripsi_produk">{{ __('produk.description') }}</label>
                                        <textarea class="form-control" name="deskripsi_produk" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="harga_produk" >{{ __('produk.prices') }}</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">IDR</div>
                                            </div>
                                            <input type="text" class="form-control" name="harga_produk" placeholder="{{ __('produk.prices') }}">
                                        </div>
                                        <br/>
                                        <label for="created_at">{{ __('produk.date') }}</label>
                                        <input type="date" class="form-control" name="created_at">  
                                        <br/>
                                        <label for="catatan">{{ __('produk.note') }}</label>
                                        <textarea class="form-control" name="catatan" id="catatan" rows="4"></textarea>
                                    </div>
                                    </div>
                                    <br/>
                                    <button type="submit" class="btn btn-primary btn active" role="button" aria-pressed="true">{{ __('produk.save') }}</button>
                                    <a href="{{ route('produks.index') }}" class="btn btn-secondary">{{ __('produk.cancel') }}</a>
                                </form>
                            </div>                            
                        </div> 
                    </div>
                </div>
           </div>
    </div>
@endsection
