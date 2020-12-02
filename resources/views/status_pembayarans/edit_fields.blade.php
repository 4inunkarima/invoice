<div class="row">
    <div class="col-md-6">
        <label for="nama_status">{{ __('status.status_name') }}</label>
        <input type="text" value="{{ $statusPembayaran->nama_status }}" class="form-control" name="nama_status" required>
        <br/>
        <label for="urutan">{{ __('status.sequence') }}</label>
        <input type="text" value="{{ $statusPembayaran->urutan }}" class="form-control" name="urutan" required>
        <br/>
        <button type="submit" class="btn btn-primary btn active" role="button" aria-pressed="true">{{ __('status.save') }}</button>
        <a href="{{ route('produks.index') }}" class="btn btn-secondary">{{ __('status.cancel') }}</a>
    </div>
</div>     