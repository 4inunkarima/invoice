@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Buat Invoice</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('invoice.store') }}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-md-2 my-4">
                                        <label for="" class="sr-only">Email</label>
                                        <input type="text" readonly class="form-control-plaintext" font-size="6px" id="" value="office@email.com">
                                    </div>
                                    <div class="col-md-4 my-4">
                                        <button type="submit" class="btn btn-primary mb-2">Another Email</button>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-4 ">
                                        <img src="https://www.limakode.com/wp-content/uploads/2020/03/5KODE1-small.png" class="ml-2 float-right" alt="...">
                                    </div>
                                </div>
                                <label for="">Deskripsi Invoice</label>
                                <textarea class="form-control col-md-6" name="" placeholder="Masukkan Deskripsi Invoice.." rows="4"></textarea>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Invoice No.</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text">#</div>
                                                </div>
                                                <input type="text" class="form-control" id="" placeholder="Number-Invoice">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Bahasa</label>
                                            <select id="" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Indonesian</option>
                                                <option>English</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Mata Uang</label>
                                            <select id="" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>IDR</option>
                                                <option>USD</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">From :</label>
                                        <textarea class="form-control" name="" rows="4" placeholder="Masukkan Alamat Pengirim"></textarea>
                                        <br/>
                                        <label for="">To :</label>
                                        <textarea class="form-control" name="" rows="4" placeholder="Masukkan Alamat Penerima"></textarea>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="">Tanggal</label>
                                        <input type="date" class="form-control" name="created_at" placeholder="Pilih Tanggal Invoice">
                                        <br/>
                                            <label for="">Tenggat Invoice</label>
                                            <select id="" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>,,,,</option>
                                                <option>....</option>
                                            </select>
                                        <br/>
                                        <label for="">Kode Bayar</label>
                                            <input type="text" class="form-control" placeholder="Order Number">
                                        </div>
                                    </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Deskripsi Item</label>
                                            <textarea class="form-control" name="" rows="4" placeholder="Masukkan Deskripsi Item..."></textarea>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Jumlah</label>
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Harga</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                                </div>
                                                <input type="text" class="form-control" id="" placeholder="Harga Satuan">
                                            </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="totals col-md-6 ">
                                        <div class="totals_container">
                                            <ul class="statement_amount_container">
                                            <li class="statement_amount">
                                                <div class="col">Sub Total</div>
                                                <input class="col no_input" type="text" disabled="" data-format-number="precision" value="" data-calculation="subtotal">
                                            </li>
                                            </ul>                                                         
                                            <div id="tax_discount_shipping_wrapper">
                                            </div>
                                            <div id="item_tax_discount_shipping_wrapper">
                                            </div>
                                            <ul class="statement_amount_container">
                                            <li class="statement_amount no_border">
                                                <div class="col"><strong>Biaya (<span data-currency="code">Tax</span>)</strong></div>
                                                <strong><input class="col no_input bold" type="text" disabled="" data-format-number="precision" data-calculation="total" value=""></strong>
                                            </li>
                                            </ul>
                                            <hr/>
                                            <ul class="statement_amount_container total_due draft">
                                            <li class="statement_amount">
                                                <div class="input-group border border-secondary">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">Total Harga</div>
                                                        </div>
                                                        <input type="text" class="form-control" id="inlineFormInputGroup" value="">
                                                </div>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                    <br/>
                                <p class="font-italic">*Mohon periksa kembali data diatas.</p>
                                    <a href="#" class="btn btn-primary btn-lg active my-3" role="button" aria-pressed="true">Send Invoice</a>
                                    <a href="#" class="btn btn-secondary btn-lg active my-3" role="button" aria-pressed="true">Draft</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection