@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('invoices.index') !!}">Invoice</a>
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
                                <strong>Create Invoice</strong>
                            </div>
                            <div class="card-body">
                                <form class="form-inline">
                                    <div class="form-group mb-2">
                                        <label for="staticEmail2" class="sr-only">Email</label>
                                        <input type="text" readonly class="form-control-plaintext" font-size="6px" id="staticEmail2" value="office@email.com">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Another Email</button>
                                </form>
                                <div class="media">
                                    <div class="media-body">
                                        <!-- <h5 class="mt-0 mb-1 float-right">logo</h5> -->
                                    </div>
                                    <img src="https://www.limakode.com/wp-content/uploads/2020/03/5KODE1-small.png" class="ml-3" alt="...">
                                </div>
                                <div class="form-group col-mb-4">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control col-md-8" id="exampleFormControlTextarea1" rows="4"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Invoice No.</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">#</div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Number-Invoice">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="inputPassword4">Language</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Indonesian</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                    <label for="inputEmail4">Currency</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Indonesian</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>
                                <hr />
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="Address">From</label>
                                        <input type="text" class="form-control-plaintext" id="staticEmail2" value="Kantor LALALA">  
                                        <p>Jl. Petemon IV No.32-A, RT 014/RW 008<br/>Kel. Petemon, Kec. Sawahan, Kota Surabaya<br/>Jawa Timur, 60252<br/>0839-0868-2951</p>
                                        <br/>
                                        <br/>
                                        
                                            <h4>Pelanggan: </h4>
                                            <p>Nama: {{ $invoice->customer->nama }}<br>
                                            Alamat: {{ $invoice->customer->alamat }}<br>
                                            Kota: {{$invoice->customer->kota}}<br>
                                            Kode Pos: {{$invoice->customer->kode_pos}}<br>
                                            Telephone: {{ $invoice->customer->telepon }}<br>
                                            Email: {{ $invoice->customer->email }}<br>
                                            Organisasi: {{$invoice->customer->organisasi}}
                                            </p>
                                        
                                        </div>
                                        <div class="col">
                                        
                                            <label for="Address">Date</label>
                                            <input type="text" class="form-control" placeholder="Add Payment Date..">
                                            <br/>
                                            <label for="Address">Purchase Order Number</label>
                                            <input type="text" class="form-control" placeholder="Order Number">
                                        </form>
                                        </div>
                                    </div>
                                </form>
                                <hr /> 
                                <div class="totals col-md-6 float-right">
                                    <div class="totals_container">
										<ul class="statement_amount_container">
                                            <li class="statement_amount">
                                                <div class="col">Sub Total</div>
                                                <input class="col no_input" type="text" disabled="" data-format-number="precision" value="Rp. {{ number_format($invoice->total) }}" data-calculation="subtotal">
                                            </li>
                                        </ul>                                                         
                                        <div id="tax_discount_shipping_wrapper">
                                        </div>
                                        <div id="item_tax_discount_shipping_wrapper">
                                        </div>
                                        <ul class="statement_amount_container">
                                        <li class="statement_amount no_border">
                                            <div class="col"><strong>Biaya (<span data-currency="code">Tax</span>)</strong></div>
                                            <strong><input class="col no_input bold" type="text" disabled="" data-format-number="precision" data-calculation="total" value="Rp. {{ number_format($invoice->tax) }}"></strong>
                                        </li>
                                        </ul>
                                        <!-- <hr/> -->
                                        <ul class="statement_amount_container total_due draft">
                                        <li class="statement_amount">
                                            <div class="input-group border border-secondary">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text">Total Harga</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" value="Rp. {{ number_format($invoice->total_harga) }}">
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr />
                            <div class="row">
                            <div class="col-md-12 mt-3">
                                <form action="{{ route('invoice.update', ['id' => $invoice->id]) }}" method="post">
                                @csrf
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</td>
                                            <th scope="col">Produk</td>
                                            <th scope="col">Qty</td>
                                            <th scope="col">Harga</td>
                                            <th scope="col">Subtotal</td>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1 @endphp
                                        @forelse ($invoice->detail as $detail)
                                        <tr>
                                            <td scope="row">{{ $no++ }}</td>
                                            <td>{{ $detail->produk->nama_produk }}</td>
                                            <td>{{ $detail->qty }}</td>
                                            <td>Rp {{ number_format($detail->harga_produk) }}</td>
                                            <td>Rp {{ $detail->subtotal }}</td>
                                            <td>
                                            <a href = "{{ route('invoice.hapus', $detail->id) }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Tidak ada data</td>
                                        </tr> 
                                        @endforelse
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
                                                <input type="number" min="1" value="1" name="qty" class="form-control">
                                            </td>
                                            <td colspan="3">
                                                <button class="btn btn-primary btn-sm">Tambahkan</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                </form>
                            </div>
                            </div>
                            <br/>
                                <div class="form-group">
                                    <a href="{{ route('invoices.index') }}" class="btn btn-primary btn-sm">Kembali</a>
                                </div>
                                <br/>
                                <br/>
                                <!-- <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Send Invoice</a>
                                <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Draft</a> -->
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection