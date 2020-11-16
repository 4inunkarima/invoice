@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <img src="{{ asset('laravel.png') }}" alt="" width="350px" height="150px">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="30%">Pelanggan</td>
                                        <td>:</td>
                                        <td>{{ $invoice->customer->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $invoice->customer->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>No Telp</td>
                                        <td>:</td>
                                        <td>{{ $invoice->customer->telepon }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $invoice->customer->email }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td width="30%">Perusahaan</td>
                                        <td>:</td>
                                        <td>Daengweb</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>Jl Sultan Hasanuddin Makassar</td>
                                    </tr>
                                    <tr>
                                        <td>No Telp</td>
                                        <td>:</td>
                                        <td>085343966997</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>support@daengweb.id</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 mt-3">
                                <form action="{{ route('invoice.update', ['id' => $invoice->id]) }}" method="post">
                                @csrf
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Produk</td>
                                            <td>Qty</td>
                                            <td>Harga</td>
                                            <td>Subtotal</td>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <!-- MENAMPILKAN PRODUK YANG TELAH DITAMBAHKAN -->
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @foreach ($invoice->detail as $detail)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $detail->produk->nama_produk }}</td>
                                            <td>{{ $detail->qty }}</td>
                                            <td>Rp {{ number_format($detail->harga_produk) }}</td>
                                            <td>Rp {{ $detail->subtotal }}</td>
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </form>
                            </div>
                            
                            <!-- MENAMPILKAN TOTAL & TAX -->
                            <div class="col-md-4 offset-md-8">
                                <table class="table table-hover table-bordered">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>:</td>
                                        <td>Rp {{ number_format($invoice->total) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pajak</td>
                                        <td>:</td>
                                        <td>2% (Rp {{ number_format($invoice->tax) }})</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>:</td>
                                        <td>Rp {{ number_format($invoice->total_harga) }}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- MENAMPILKAN TOTAL & TAX -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection