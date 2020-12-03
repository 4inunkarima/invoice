<html>
    <head>
        <tittle></tittle>

    </head>
    <body>
        <div class="form-group">
        <p align="center"><b>Laporan Transaksi Pertanggal</p>
        <table class="static" align="center" rules="all" border="1px" style="width:95%;">

        <tr>
            <th>Invoice ID</th>
            <th>Tanggal Buat Invoice</th>
            <th>Batas Pembayaran</th>
            <th>Status Pembayaran</th>
            <th>Deskripsi Transaksi</th>
        </tr>
        @foreach ($cetakPertanggal as $print)
            <tr align="center">
            <td>{{ $print->kode_invoice }}</td>
            <td>{{ $print->created_at->format('D, d M Y') }}</td>
            <td>{{ $print->batas_pembayaran->format('D, d M Y') }}</td>
            <td>{{ $print->status->nama_status }}</td>
            <td>{{ $print->deskripsi_transaksi }}</td>
        </tr>
        @endforeach
        </table>
        <script type="text/javascript">
        window.print();
        </script>
        </div>
    </body>
</html>