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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Tambahkan / Edit</strong>
                            </div>
                            <div class="card-body">
                              <form method="post" action="/produks">
                              @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="nama_produk">Nama Produk</label>
                                        <input type="text" class="form-control" id="nama_produk" placeholder="Nama">
                                        <br/>
                                        <label for="jenis_produk">Jenis Produk</label>
                                        <input type="text" class="form-control" id="nama_produk" placeholder="Jenis Produk">
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="stok">Stok</label>
                                        <div class="input-group mb-3">
                                           <input type="text" class="form-control" id="stok" placeholder="Stok"> 
                                            <div class="input-group-prepend">
                                            <select id="inputState" class="input-group-text">
                                                <option selected>Choose...</option>
                                                <option>/Pcs</option>
                                                <option>/Lusin</option>
                                            </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <label for="deskripsi_produk">Deskripsi Produk</label>
                                        <textarea class="form-control" id="deskripsi_produk" rows="4"></textarea>
                                        </div>
                                    </div>
                                </form>
                                <hr />
                                <form method="post" action="/produks">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="harga_produk" >Harga Produk</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">IDR</div>
                                            </div>
                                            <input type="text" class="form-control" id="harga_produk" placeholder="Price">
                                        </div>
                                        <br/>
                                        <label for="created_at">Tanggal Masuk</label>
                                        <input type="date" class="form-control" id="created_at" name="Tanggal Masuk" required>  
                                        <br/>
                                        <label for="catatan">Catatan Tambahan</label>
                                        <textarea class="form-control" id="catatan" rows="4"></textarea>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg active my-3" aria-pressed="true">Save Change</button>
                                </form>
                                <br/>
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
