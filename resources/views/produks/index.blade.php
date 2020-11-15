@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Produk</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Produk
                             <a class="pull-right" href="{{ route('produks.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">

                            <div class="table-responsive-sm">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="row">No.</th>
                                            <th>Nama Produk</th>
                                            <th>Jenis Produk</th>
                                            <th>Stok</th>
                                            <th>Harga Produk</th>
                                            <th>Tanggal Masuk</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($produk as $produk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $produk->nama_produk }}</td>
                                            <td>{{ $produk->jenis_produk }}</td>
                                            <td>{{ $produk->stok }}</td>
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
