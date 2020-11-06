<!-- Kode Transaksi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_transaksi', 'Kode Transaksi:') !!}
    {!! Form::text('kode_transaksi', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Customer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_customer', 'Nama Customer:') !!}
    {!! Form::text('nama_customer', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Transaksi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_transaksi', 'Jumlah Transaksi:') !!}
    {!! Form::text('jumlah_transaksi', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_invoice', 'Kode Invoice:') !!}
    {!! Form::text('kode_invoice', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Transaksi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_transaksi', 'Tanggal Transaksi:') !!}
    {!! Form::text('tanggal_transaksi', null, ['class' => 'form-control','id'=>'tanggal_transaksi']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#tanggal_transaksi').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transaksis.index') }}" class="btn btn-secondary">Cancel</a>
</div>
