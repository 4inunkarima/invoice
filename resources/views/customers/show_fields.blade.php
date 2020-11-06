<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $customer->nama }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $customer->email }}</p>
</div>

<!-- Telepon Field -->
<div class="form-group">
    {!! Form::label('telepon', 'Telepon:') !!}
    <p>{{ $customer->telepon }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $customer->alamat }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $customer->gender }}</p>
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $customer->username }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $customer->password }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $customer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $customer->updated_at }}</p>
</div>

