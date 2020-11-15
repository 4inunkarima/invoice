@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('produks.index') }}">Produk</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Details</strong>
                                  <a href="{{ route('produks.index') }}" class="btn btn-light">Back</a>
                             </div>
                             <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Nama Produk</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->nama_produk}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Produk</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->jenis_produk}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Stok</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->stok}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Deskripsi Produk</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->deskripsi_produk}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Harga Produk</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->harga_produk}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Catatan</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$produk->catatan}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
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
