@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('produks.index') !!}">{{ __('produk.produk') }}</a>
      </li>
      <li class="breadcrumb-item active">{{ __('produk.edit') }}</li>
    </ol>
    <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>{{ __('produk.edit') }}</strong>
                            </div>
                            <div class="card-body">
                              <form method="post" action="/produks/{{ $produk->id }}">
                              @method ('patch')
                              @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="nama_produk">{{ __('produk.product_name') }}</label>
                                        <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="Masukkan Nama" value="{{ $produk->nama_produk }}">
                                        <br/>
                                        <label for="jenis_produk">{{ __('produk.product_type') }}</label>
                                        <input type="text" class="form-control" id="jenis_produk" name="jenis_produk" placeholder="Jenis Produk" value="{{ $produk->jenis_produk }}">
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="stok">{{ __('produk.stock') }}</label>
                                        <div class="input-group mb-3">
                                           <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="{{ $produk->stok }}"> 
                                            <div class="input-group-prepend">
                                            <select id="inputState" class="input-group-text">
                                                <option selected>{{ __('produk.choose') }}</option>
                                                <option>/Pcs</option>
                                                <option>/Lusin</option>
                                            </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <label for="deskripsi_produk">{{ __('produk.description') }}</label>
                                        <input class="form-control" name="deskripsi_produk" rows="4" value="{{ $produk->deskripsi_produk }}">
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
                                            <input type="text" class="form-control" id="harga_produk" name="harga_produk" placeholder="Price" value="{{ $produk->harga_produk }}">
                                        </div>
                                        <br/>
                                        <label for="created_at">{{ __('produk.date') }}</label>
                                        <input type="date" class="form-control" name="created_at" value="{{ $produk->created_at }}">  
                                        <br/>
                                        <label for="catatan">{{ __('produk.note') }}</label>
                                        <textarea class="form-control" id="catatan" name="catatan" rows="4" value="{{ $produk->catatan }}"></textarea>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg active my-3" aria-pressed="true">{{ __('produk.save') }}</button>
                                </form>
                                <br/>
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
