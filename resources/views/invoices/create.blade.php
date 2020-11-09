@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('invoices.index') !!}">Invoice</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Create Invoice</strong>
                            </div>
                            <div class="card-body">
                                <form class="form-inline">
                                <div class="form-group mb-2">
                                    <label for="staticEmail2" class="sr-only">Invoice</label>
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Invoice">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Save Draft</button>
                                </form>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 float-right">logo</h5>
                                    </div>
                                    <img src="..." class="ml-3" alt="...">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Invoice No.</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">#</div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Number-Invoice">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="inputPassword4">Language</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Indonesian</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                    <label for="inputEmail4">Currency</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Indonesian</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">From</label>
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Kantor LALALA">  
                                        <p>Jl. Petemon IV No.32-A, RT 014/RW 008<br/>Kel. Petemon, Kec. Sawahan, Kota Surabaya<br/>Jawa Timur, 60252<br/>0839-0868-2951</p>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputState">Language</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <hr />
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                </div>
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
