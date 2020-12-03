@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('transaksis.index') !!}">Transaksi</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Transaksi</strong>
                          </div>
                          <div class="card-body">
                          <form role="form" method="post" action="{{ url('transaksi/'.$tamp->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                  <div class="box-body">
 
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID Invoice</label>
                      <select class="form-control select2" name="kode_invoice">
                          @foreach($kode_invoice as $koin)
                          <option value="{{ $koin->id }}"{{($tamp->kode_invoice == $koin->id ? 'selected':'')}}>{{$koin->id}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Status Pembayaran</label>
                      <select class="form-control select2" name="kode_pembayaran">
                          @foreach($kode_pembayaran as $kopem)
                          <option value="{{ $kopem->id }}"{{($tamp->kode_pembayaran == $kopem->id ? 'selected':'')}}>{{ $kopem->pembayaran_id }}-{{$kopem->nama_status}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="batas_pembayaran">Batas Pembayaran</label>
                      <input type="date" class="form-control" name="batas_pembayaran" value="{{$tamp->batas_pembayaran}}">  
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Deskripsi Transaksi</label>
                      <input type="text" name="deskripsi_transaksi" class="form-control" value="{{ $tamp->deskripsi_transaksi }}">
                    </div>


                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
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