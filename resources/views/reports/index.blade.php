@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Report</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Laporan</strong>
                            </div>
                            <div class="card-body">
                                <section class="content" id="dw">
                            <div class="container-fluid">
                            <div class="row">
                        <!-- FORM UNTUK FILTER DATA -->
                        <div class="col-md-12">
                            <!-- @card
                                @slot('title')
                                Filter Transaksi
                                @endslot -->
                                <form action="#" method="get">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Mulai Tanggal</label>
                                                <input type="text" name="start_date" 
                                                    class="form-control {{ $errors->has('start_date') ? 'is-invalid':'' }}"
                                                    id="start_date"
                                                    value="{{ request()->get('start_date') }}"
                                                    >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sampai Tanggal</label>
                                                <input type="text" name="end_date" 
                                                    class="form-control {{ $errors->has('end_date') ? 'is-invalid':'' }}"
                                                    id="end_date"
                                                    value="{{ request()->get('end_date') }}">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-sm">Cari</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Pelanggan</label>
                                                <select name="customer_id" class="form-control">
                                                    <option value="">Pilih</option>
                                                
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kasir</label>
                                                <select name="user_id" class="form-control">
                                                    <option value="">Pilih</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
    ​
                                <!-- @slot('footer')
    ​
                                @endslot
                            @endcard -->
                        </div>

                        @include('reports.table')
                    
                             
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

