@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('transaksis.index') !!}">{{ __('transaksi.transaksi') }}</a>
      </li>
      <li class="breadcrumb-item active">{{ __('transaksi.create') }}</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>{{ __('transaksi.create_tr') }}</strong>
                            </div>
                            <div class="card-body">
                <form role="form" method="post" action="{{ url('/add') }}">
                    @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{ __('transaksi.kode') }}</label>
                      <select class="form-control select2" name="kode_invoice">
                          @foreach($kode_invoice as $koin)
                          <option value="{{ $koin->id }}">{{ $koin->id }}-{{ $koin->customer->nama }}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{ __('transaksi.kd_pembayaran') }}</label>
                      <select class="form-control select2" name="kode_pembayaran">
                          @foreach($kode_pembayaran as $kopem)
                          <option value="{{ $kopem->id }}">{{ $kopem->id }}-{{$kopem->nama_status}}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="batas_pembayaran">{{ __('transaksi.bts_pembayaran') }}</label>
                      <input type="date" class="form-control" name="batas_pembayaran">  
                    </div>
                    <div class="form-group">
                      <label for="deskripsi_transaksi">{{ __('transaksi.description') }}</label>
                      <textarea class="form-control" name="deskripsi_transaksi" id="deskripsi_transaksi" rows="4"></textarea>
                    </div>
 
                    
                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" role="button" aria-pressed="true">{{ __('transaksi.submit') }}</button>
                    <!-- <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a> -->
                  </div>
                </form>

                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
