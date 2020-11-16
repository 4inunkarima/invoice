@extends('layouts.app')

@section('content')
<div class="row">
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
                                            <form action="{{ route('invoice.delete_produk', $detail->id) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE" class="form-control">
                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="hidden" name="_method" value="PUT" class="form-control">
                                                <select name="produk_id" class="form-control">
                                                    <option value="">Pilih Produk</option>
                                                    @foreach ($produks as $produk)
                                                    <option value="{{ $produk->id }}">{{ $produk->nama_produk }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" min="1" value="1" name="qty" class="form-control" required>
                                            </td>
                                            <td colspan="3">
                                                <button class="btn btn-primary btn-sm">Tambahkan</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                    <!-- FORM UNTUK MEMILIH PRODUK YANG AKAN DITAMBAHKAN -->
                                </table>
                                </form>
                            </div>
                            </div>
@endsection