<div class="table-responsive-sm">
    <table class="table table-striped" id="produks-table">
        <thead>
            <tr>
                <th>Nama Produk</th>
        <th>Jenis Produk</th>
        <th>Stok</th>
        <th>Deskripsi Produk</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produks as $produk)
            <tr>
                <td>{{ $produk->nama_produk }}</td>
            <td>{{ $produk->jenis_produk }}</td>
            <td>{{ $produk->stok }}</td>
            <td>{{ $produk->deskripsi_produk }}</td>
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