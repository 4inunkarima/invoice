<!-- Nama Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_status', 'Nama Status:') !!}
    {!! Form::text('nama_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('statusPembayarans.index') }}" class="btn btn-secondary">Cancel</a>
</div>
