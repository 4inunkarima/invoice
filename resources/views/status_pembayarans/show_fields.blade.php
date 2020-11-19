<!-- Nama Status Field -->
<div class="form-group">
    {!! Form::label('nama_status', 'Nama Status:') !!}
    <p>{{ $statusPembayaran->nama_status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $statusPembayaran->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $statusPembayaran->updated_at }}</p>
</div>

