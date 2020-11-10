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
                                <div class="form-group col-mb-4">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control col-md-8" id="exampleFormControlTextarea1" rows="4"></textarea>
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
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="Address">From</label>
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Kantor LALALA">  
                                        <p>Jl. Petemon IV No.32-A, RT 014/RW 008<br/>Kel. Petemon, Kec. Sawahan, Kota Surabaya<br/>Jawa Timur, 60252<br/>0839-0868-2951</p>
                                        <br/>
                                        <label for="Address">To</label>
                                        <input type="text" class="form-control" placeholder="Client">
                                        </div>
                                        <div class="col">
                                        <label for="Address">Date</label>
                                        <input type="text" class="form-control" placeholder="Add Payment Date..">
                                        <br/>
                                        <label for="Address">Invoice Due</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>24 hours</option>
                                            <option>1 day</option>
                                        </select>
                                        <br/>
                                        <label for="Address">Purchase Order Number</label>
                                        <input type="text" class="form-control" placeholder="Order Number">
                                        </div>
                                    </div>
                                </form>
                                <hr />
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="Address">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Item Name & Description" rows="4"></textarea>
                                        </div>
                                        <div class="col-md-2">
                                        <label for="Address">Quantity</label>
                                        <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                        <div class="col-md-2">
                                        <label for="Address">Rate</label>
                                        <input type="text" class="form-control" placeholder="0.00">
                                        <br/>
                                            <select id="inputState" class="form-control">
                                                <option selected>Unit</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                        <label for="Address">Amount</label>
                                        <input type="text" class="form-control" placeholder="USD   0.00">
                                        </div>
                                    </div>
                                </form>
                                                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
