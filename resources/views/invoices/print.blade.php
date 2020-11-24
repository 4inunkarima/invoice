<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: normal; /* inherit */
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
       float: right;
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: center;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top justify">
                <td colspan="6">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.limakode.com/wp-content/uploads/2020/03/5KODE1-small.png" width="150px">
                            </td>
                            
                            <td class="float-right">
                                Invoice : <strong>#{{ $invoice->id }}</strong><br>
                                {{ $invoice->created_at }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            
            <tr class="information">
                <td colspan="6">
                    <table>
                        <tr>
                            <td>
                                <strong>PENERIMA</strong><br>
                                Nama: {{ $invoice->customer->nama }}<br>
                                Alamat: {{ $invoice->customer->alamat }}<br>
                                Kota: {{$invoice->customer->kota}}<br>
                                Kode Pos: {{$invoice->customer->kode_pos}}<br>
                                Telephone: {{ $invoice->customer->telepon }}<br>
                                Email: {{ $invoice->customer->email }}<br>
                                Organisasi: {{$invoice->customer->organisasi}}
                            </td>
                            
                            <td float-right>
                                <strong>PENGIRIM</strong><br>
                                Daengweb<br>
                                085343966997<br>
                                Jl Sultan Hasanuddin<br>
                                Somba Opu, Kab Gowa<br>
                                Sulawesi Selatan
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="top justify heading">
                <td colspan="6">
                    <table>
                    <thead class="thead-dark">
                        <tr class="heading">
                        <th scope="col-md-1">#</th>
                        <th scope="col-md-3">Deskripsi</th>
                        <th scope="col-md-2">Satuan</th>
                        <th scope="col-md-2">Harga</th>
                        <th scope="col-md-2">Jumlah</th>
                        </tr>
                    </thead>
                </td>
            </tr>
            <tr class="top justify">
                <td colspan="6">
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                    @foreach ($invoice->detail as $row)
                    <tr class="item">
                        <td>
                            {{ $row->produk->nama_produk }}<br>
                            <strong>Harga</strong>: Rp {{ number_format($row->harga_produk) }} x {{ $row->qty }}
                        </td>
                        <td>Rp {{ number_format($row->harga_produk * $row->qty) }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </td>
            </tr>
        </table>

        <table cellpadding="0" cellspacing="0">
            <tr>
                <th colspan="6">Subtotal</th>
                <td>Rp {{ number_format($invoice->total) }}</td>
            </tr>
            <tr>
                <th colspan="6">Pajak</th>
                <td>2%</td>
                <td>Rp {{ number_format($invoice->tax) }}</td>
            </tr>
            <tr>
                <th colspan="6">Total</th>
                <td>Rp {{ number_format($invoice->total_harga) }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
