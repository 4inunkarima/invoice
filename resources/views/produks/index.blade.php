@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Produks</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Produks
                             <a class="pull-right" href="{{ route('produks.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                            <table class="table table-striped" id="produks-table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Jenis Produk</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Deskripsi Produk</th>
                                        <th scope="col">Harga Produk</th>
                                        <th scope="col">Waktu</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($produks as $produk)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $produk->nama_produk }}</td>
                                        <td>{{ $produk->jenis_produk }}</td>
                                        <td>{{ $produk->stok }}</td>
                                        <td>{{ $produk->deskripsi_produk }}</td>
                                        <td>{{ $produk->harga_produk }}</td>
                                        <td>{{ $produk->created_at }}</td>
                                            <td>
                                            {!! Form::open(['route' => ['produks.destroy', $produk->id], 'method' => 'delete']) !!}
                                            <div class='btn-group'>
                                                <a href="{{ route('produks.show', [$produk->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('produks.edit', [$produk->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

