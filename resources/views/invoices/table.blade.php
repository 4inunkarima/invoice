<div class="table-responsive-sm">
    <table class="table table-striped" id="invoices-table">
        <thead>
            <tr>
                <th>Kode Invoice</th>
        <th>Tanggal Invoice</th>
        <th>Status</th>
        <th>Due Date</th>
        <th>Detail Transaksi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            <tr>
                <td>{{ $invoice->kode_invoice }}</td>
            <td>{{ $invoice->tanggal_invoice }}</td>
            <td>{{ $invoice->status }}</td>
            <td>{{ $invoice->due_date }}</td>
            <td>{{ $invoice->detail_transaksi }}</td>
                <td>
                    {!! Form::open(['route' => ['invoices.destroy', $invoice->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('invoices.show', [$invoice->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('invoices.edit', [$invoice->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>