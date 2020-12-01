<!-- Nama Produk Field -->
<div class="form-group">
    {!! Form::label('nama_produk', 'Nama Produk:') !!}
    <p>{{ $produk->nama_produk }}</p>
</div>

<!-- Jenis Produk Field -->
<div class="form-group">
    {!! Form::label('jenis_produk', 'Jenis Produk:') !!}
    <p>{{ $produk->jenis_produk }}</p>
</div>

<!-- Stok Field -->
<div class="form-group">
    {!! Form::label('stok', 'Stok:') !!}
    <p>{{ $produk->stok }}</p>
</div>

<!-- Deskripsi Produk Field -->
<div class="form-group">
    {!! Form::label('deskripsi_produk', 'Deskripsi Produk:') !!}
    <p>{{ $produk->deskripsi_produk }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $produk->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $produk->updated_at }}</p>
</div>

