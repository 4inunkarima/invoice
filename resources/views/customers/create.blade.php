@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('customers.index') !!}">Customer</a>
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
                                <strong>Basic Information</strong>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <img src="views/customers/prof.png" class="mr-3" alt="prof">
                                    <div class="media-body">
                                    <select id="inputState" class="form-control col-md-4">
                                            <option selected>Choose...</option>
                                            <option>Individu</option>
                                            <option>Organisation</option>
                                        </select>
                                    </div>
                                </div>
                                <hr />
                                <form>
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label for="Address">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                        <br/>
                                        <label for="Address">Email</label>
                                        <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="Address">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                        <br/>
                                        <label for="Address">Username</label>
                                        <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="col">
                                        <label for="Address">Currency</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose..</option>
                                            <option>IDR</option>
                                            <option>USD</option>
                                        </select>
                                        <br/>
                                        <label for="Address">Language</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose..</option>
                                            <option>English</option>
                                            <option>Indonesia</option>
                                        </select> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Address</strong>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="Address">Address 1</label>
                                        <input type="text" class="form-control" placeholder="Address">
                                        <br/>
                                        <label for="Address">Address 1(Optional)</label>
                                        <input type="text" class="form-control" placeholder="Address">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="Address">Postal Code</label>
                                        <input type="text" class="form-control" placeholder="Postal Code">
                                        <br/>
                                        <label for="Address">City</label>
                                        <input type="text" class="form-control" placeholder="City">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="Address">State</label>
                                        <input type="text" class="form-control" placeholder="State">
                                        <br/>
                                        <label for="Address">Country</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose..</option>
                                            <option>Indonesia</option>
                                            <option>Brunei Darussalam</option>
                                            <option>Kamboja</option>
                                            <option>Laos</option>
                                            <option>Myanmar</option>
                                            <option>Singapura</option>
                                            <option>Filipina</option>
                                        </select> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Aditional Informations</strong>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="Address">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                            <br/>
                                            <label for="Address">Gender</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Address">Fax Number</label>
                                            <input type="text" class="form-control" placeholder="Fax Number">
                                            <br/>
                                            <label for="Address">Note</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                        </div>
                                    </div>
                                </form>
                                <hr />
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="Address">Password</label>
                                            <input type="text" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Address">Confirm Password</label>
                                            <input type="text" class="form-control" placeholder="Password">
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
