<!-- Kode Invoice Field -->
<div class="form-group">
    {!! Form::label('kode_invoice', 'Kode Invoice:') !!}
    <p>{{ $invoice->kode_invoice }}</p>
</div>

<!-- Tanggal Invoice Field -->
<div class="form-group">
    {!! Form::label('tanggal_invoice', 'Tanggal Invoice:') !!}
    <p>{{ $invoice->tanggal_invoice }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $invoice->status }}</p>
</div>

<!-- Due Date Field -->
<div class="form-group">
    {!! Form::label('due_date', 'Due Date:') !!}
    <p>{{ $invoice->due_date }}</p>
</div>

<!-- Detail Transaksi Field -->
<div class="form-group">
    {!! Form::label('detail_transaksi', 'Detail Transaksi:') !!}
    <p>{{ $invoice->detail_transaksi }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $invoice->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $invoice->updated_at }}</p>
</div>

