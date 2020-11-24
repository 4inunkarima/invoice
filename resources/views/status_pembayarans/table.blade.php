<div class="table-responsive-sm">
    <table class="table table-striped" id="statusPembayarans-table">
        <thead>
            <tr>
                <th>Nama Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($statusPembayarans as $statusPembayaran)
            <tr>
                <td>{{ $statusPembayaran->nama_status }}</td>
                <td>{{ $statusPembayaran->urutan }}</td>
                <td>
                    {!! Form::open(['route' => ['statusPembayarans.destroy', $statusPembayaran->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('statusPembayarans.show', [$statusPembayaran->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('statusPembayarans.edit', [$statusPembayaran->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>