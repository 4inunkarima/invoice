<!-- Kode Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_invoice', 'Kode Invoice:') !!}
    {!! Form::text('kode_invoice', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_invoice', 'Tanggal Invoice:') !!}
    {!! Form::text('tanggal_invoice', null, ['class' => 'form-control','id'=>'tanggal_invoice']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#tanggal_invoice').datetimepicker({
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


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Due Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due_date', 'Due Date:') !!}
    {!! Form::text('due_date', null, ['class' => 'form-control','id'=>'due_date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#due_date').datetimepicker({
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


<!-- Detail Transaksi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detail_transaksi', 'Detail Transaksi:') !!}
    {!! Form::text('detail_transaksi', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Cancel</a>
</div>
