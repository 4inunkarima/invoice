<!-- Nama Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_produk', 'Nama Produk:') !!}
    {!! Form::text('nama_produk', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_produk', 'Jenis Produk:') !!}
    {!! Form::text('jenis_produk', null, ['class' => 'form-control']) !!}
</div>

<!-- Stok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stok', 'Stok:') !!}
    {!! Form::number('stok', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deskripsi_produk', 'Deskripsi Produk:') !!}
    {!! Form::text('deskripsi_produk', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produks.index') }}" class="btn btn-secondary">Cancel</a>
</div>
