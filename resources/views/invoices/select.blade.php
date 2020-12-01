@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Buat Invoice</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('invoice.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Customer</label>
                                <select name="customer_id" class="form-control" required>
                                    <option value="">Pilih</option>
                                    @foreach ($customers as $customer) 
                                    <option value="{{ $customer->id }}">{{ $customer->nama }} - {{ $customer->email }} - {{$customer->alamat}}</option>
                                    @endforeach
                                </select>
                                </div>
                            <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
                            <script type="text/javascript">
                            $('.new').select2({
                                placeholder: 'Cari...',
                                ajax: {
                                url: '/new',
                                dataType: 'json',
                                delay: 250,
                                processResults: function (data) {
                                    return {
                                    results:  $.map(data, function (item) {
                                        return {
                                        text: item.email,
                                        id: item.id
                                        }
                                    })
                                    };
                                },
                                cache: true
                                }
                            });
                            </script> -->
                            
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Buat</button>
                                <a href="{{ route('invoices.index') }}" class="btn btn-primary btn-sm">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection