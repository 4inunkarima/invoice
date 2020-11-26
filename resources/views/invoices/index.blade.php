@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Manajemen Invoice</h3>
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
                             Invoice
                             <a class="pull-right" href="{{ route('invoice.select') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Invoice ID</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">No Telp</th>
                                    <th scope="col">Total Item</th>
                                    <th scope="col">Tanggal dan Waktu</th>
                                    <!-- <th>Batas Pembayaran</th> -->
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Pajak</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($invoice as $row)
                                    <tr>
                                        <td scpope="row"><strong>#{{ $row->id }}</strong></td>
                                        <td>{{ $row->customer->nama }}</td>
                                        <td>{{ $row->customer->telepon }}</td>
                                        <td><span class="badge badge-success">{{ $row->detail->count() }} Item</span></td>
                                        <td>{{ $row->created_at->format('D, d M Y') }}</td>
                                        <!-- <td>{{$row->due_date}}</td> -->
                                        <td>Rp {{ number_format($row->total) }}</td>
                                        <td>Rp {{ number_format($row->tax) }}</td>
                                        <td>Rp {{ number_format($row->total_harga) }}</td>
                                        <td>
                                            <form action="{{ route('invoice.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="{{ route('invoice.print', $row->id) }}" class="btn btn-primary btn-sm" target="_blank">Print</a>
                                                <a href="{{ route('invoice.update', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
                        <div class="float-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection