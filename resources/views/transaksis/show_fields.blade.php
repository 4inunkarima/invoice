<!-- Kode Transaksi Field -->
<div class="form-group">
    {!! Form::label('kode_transaksi', 'Kode Transaksi:') !!}
    <p>{{ $transaksi->kode_transaksi }}</p>
</div>

<!-- Nama Customer Field -->
<div class="form-group">
    {!! Form::label('nama_customer', 'Nama Customer:') !!}
    <p>{{ $transaksi->nama_customer }}</p>
</div>

<!-- Jumlah Transaksi Field -->
<div class="form-group">
    {!! Form::label('jumlah_transaksi', 'Jumlah Transaksi:') !!}
    <p>{{ $transaksi->jumlah_transaksi }}</p>
</div>

<!-- Kode Invoice Field -->
<div class="form-group">
    {!! Form::label('kode_invoice', 'Kode Invoice:') !!}
    <p>{{ $transaksi->kode_invoice }}</p>
</div>

<!-- Tanggal Transaksi Field -->
<div class="form-group">
    {!! Form::label('tanggal_transaksi', 'Tanggal Transaksi:') !!}
    <p>{{ $transaksi->tanggal_transaksi }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $transaksi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $transaksi->updated_at }}</p>
</div>

