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
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">No Telp</th>
                                    <!-- <th scope="col">Total Item</th> -->
                                    <th scope="col">Tanggal dan Waktu</th>
                                    <th scope="col">Batas Pembayaran</th>
                                    <th scope="col">Status Pembayaran</th>
                                    <!-- <th scope="col">Pajak</th> -->
                                    <!-- <th scope="col">Total</th> -->
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection