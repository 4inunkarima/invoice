@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('transaksis.index') !!}">Transaksi</a>
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
                                <strong>Create Transaksi</strong>
                            </div>
                            <div class="card-body">
                <form role="form" method="post" action="{{ url('/create') }}">
                    @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kode Invoice</label>
                      <select class="form-control select2" name="kode_invoice">
                          @foreach($kode_invoice as $koin)
                          <option value="{{ $koin->id }}">{{ $koin->id }}-Customer</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kode Pembayaran</label>
                      <select class="form-control select2" name="kode_pembayaran">
                          @foreach($kode_pembayaran as $kopem)
                          <option value="{{ $kopem->id }}">{{ $kopem->id }}-{{$kopem->nama_status}}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="batas_pembayaran">Batas Pembayaran</label>
                      <input type="date" class="form-control" name="batas_pembayaran">  
                      <!-- <label for="exampleInputEmail1">Batas Pembayaran</label>
                      <select class="form-control select2" name="kode_invoice">
                          @foreach($kode_invoice as $koin)
                          <option value="{{ $koin->id }}">{{ $koin->id }}</option>
                          @endforeach
                      </select> -->
                    </div>
                    <div class="form-group">
                      <label for="deskripsi_transaksi">Deskripsi Transaksi</label>
                      <textarea class="form-control" name="deskripsi_transaksi" id="deskripsi_transaksi" rows="4"></textarea>
                      <!-- <label for="exampleInputEmail1">Deskripsi Transaksi</label>
                      <select class="form-control select2" name="kode_invoice">
                          @foreach($kode_invoice as $koin)
                          <option value="{{ $koin->id }}">{{ $koin->id }}</option>
                          @endforeach
                      </select> -->
                    </div>
 
                    
                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
