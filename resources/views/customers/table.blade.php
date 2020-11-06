<div class="table-responsive-sm">
    <table class="table table-striped" id="customers-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Username</th>
        <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->nama }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->telepon }}</td>
            <td>{{ $customer->alamat }}</td>
            <td>{{ $customer->gender }}</td>
            <td>{{ $customer->username }}</td>
            <td>{{ $customer->password }}</td>
                <td>
                    {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customer->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('customers.edit', [$customer->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>