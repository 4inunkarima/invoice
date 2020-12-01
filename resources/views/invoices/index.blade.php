@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
        <li class="breadcrumb-item">Invoice</li>
</ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                <div class="card">                    
                    
                        <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             {{ __('invoice.invoice') }}
                             <a class="pull-right" href="{{ route('invoice.select') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('invoice.id') }}</th>
                                    <th scope="col">{{ __('invoice.name') }}</th>
                                    <th scope="col">{{ __('invoice.teleponn') }}</th>
                                    <th scope="col">{{ __('invoice.item_total') }}</th>
                                    <th scope="col">{{ __('invoice.date') }}</th>
                                    <!-- <th>Batas Pembayaran</th> -->
                                    <th scope="col">{{ __('invoice.subtotal') }}</th>
                                    <th scope="col">{{ __('invoice.tax') }}</th>
                                    <th scope="col">{{ __('invoice.total') }}</th>
                                    <th scope="col">{{ __('invoice.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($invoice as $row)
                                    <tr>
                                        <td scpope="row"><strong>#{{ $row->id }}</strong></td>
                                        <td>{{ $row->customer->nama }}</td>
                                        <td>{{ $row->customer->telepon }}</td>
                                        <td><span class="badge badge-success">{{ $row->detail->count() }} Item</span></td>
                                        <td>{{ $row->created_at->format('D, d M Y') }}</td>
                                        <!-- <td>{{$row->due_date}}</td> -->
                                        <td>Rp {{ number_format($row->total) }}</td>
                                        <td>Rp {{ number_format($row->tax) }}</td>
                                        <td>Rp {{ number_format($row->total_harga) }}</td>
                                        <td>
                                            <form action="{{ route('invoice.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="{{ route('invoice.print', $row->id) }}" class="btn btn-primary btn-sm" target="_blank">{{ __('invoice.print') }}</a>
                                                <a href="{{ route('invoice.update', $row->id) }}" class="btn btn-warning btn-sm">{{ __('invoice.edit') }}</a>
                                                <button class="btn btn-danger btn-sm">{{ __('invoice.delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">{{ __('invoice.comment') }}</td>
                                    </tr> 
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-right">
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection