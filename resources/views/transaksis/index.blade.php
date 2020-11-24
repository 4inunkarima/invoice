@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Transaksi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Transaksi
                             <a class="pull-right" href="{{ route('transaksi.add') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Invoice ID</th>
                                    <!-- <th scope="col">Nama Lengkap</th> -->
                                    <!-- <th scope="col">No Telp</th> -->
                                    <th scope="col">Batas Pembayaran</th>
                                    <th scope="col">Status Pembayaran</th>
                                    <th scope="col">Deskripsi Transaksi</th>
                                    <th scope="col">Ubah Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($transaksi as $tamp)
                                    <tr>
                                        <td scpope="row"><strong>#{{ $tamp->kode_invoice }}</strong></td>
                                        <td>{{ $tamp->batas_pembayaran->format('D, d M Y')}}</td>
                                        <td>{{ $tamp->pembayarans->nama_status }}</td>
                                        <td>{{ $tamp->deskripsi_transaksi }}</td>
                                        
                                        <td>
                                            <div style="width:60px">
                                            <a href="{{ url('naik-status/'.$tamp->id) }}" class="btn btn-primary btn-sm" id="edit"><i class="fa fa-pencil-square-o"></i>Naik Status</a>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <form action="{{ route('transaksi.destroy', $tamp->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data</td>
                                    </tr> 
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection