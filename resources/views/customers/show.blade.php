@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('customers.index') }}">{{ __('customer.customer') }}</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>{{ __('customer.detail') }}</strong>
                                  <a href="{{ route('customers.index') }}" class="btn btn-light">{{ __('customer.back') }}</a>
                             </div>
                             <div class="card-body">
                             <form>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.nama') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->nama}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.email') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->email}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.telepon') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->telepon}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.gender') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->gender}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.organisasi') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->organisasi}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.alamat') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->alamat}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.kode_pos') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->kode_pos}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.provinsi') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->provinsi}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.alamat_tambahan') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->alamat_tambahan}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.kota') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->kota}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.negara') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->negara}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.username') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->username}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.fax_number') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->fax_number}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.note') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->note}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.password') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->password}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.konfirmasi_password') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->konfirmasi_password}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.created_at') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->created_at}}</p> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">{{ __('customer.updated_at') }}</label>
                                        <div class="col-sm-10">
                                         <p class="text">:  {{$customer->updated_at}}</p> 
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
