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
                                        <label for="staticEmail2" class="sr-only">Email</label>
                                        <input type="text" readonly class="form-control-plaintext" font-size="6px" id="staticEmail2" value="office@email.com">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Another Email</button>
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
                                        <input type="text" class="form-control-plaintext" id="staticEmail2" value="Kantor LALALA">  
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
                                <hr /> 
                                <div class="totals col-md-6 float-right">
                                    <div class="totals_container">
										<ul class="statement_amount_container">
                                            <li class="statement_amount">
                                                <div class="col">Sub Total</div>
                                                <input class="col no_input" type="text" disabled="" data-format-number="precision" value="0.00" data-calculation="subtotal">
                                            </li>
                                        </ul>                                                         
                                        <div id="tax_discount_shipping_wrapper">
                                        </div>
                                        <div id="item_tax_discount_shipping_wrapper">
                                        </div>
                                        <ul class="statement_amount_container">
                                        <li class="statement_amount no_border">
                                            <div class="col"><strong>Total (<span data-currency="code">USD</span>)</strong></div>
                                            <strong><input class="col no_input bold" type="text" disabled="" data-format-number="precision" data-calculation="total" value="0.00"></strong>
                                        </li>
                                        </ul>
                                        <hr />
                                        <ul class="statement_amount_container total_due draft">
                                        <li class="statement_amount">
                                            <div class="input-group border border-secondary">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text">Balance</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" value="USD">
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                                <br/>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                            <label for="Address">Invoice Note</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Add note.." rows="4"></textarea> 
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                                    <label class="form-check-label" for="disabledFieldsetCheck">
                                                    Data filled correctly
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <br/>
                                <br/>
                                <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Send Invoice</a>
                                <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Draft</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
