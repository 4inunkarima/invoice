<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-plus-square-o fa-lg"></i>
                    <strong>{{ __('customer.basic') }}</strong>
                        </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label for="nama">{{ __('customer.nama') }}</label>
                                        <input type="text" name="nama" value="{{$customer->email}}" class="form-control" >
                                        <br/>
                                        <label for="gender">{{ __('customer.gender') }}</label>
                                        <input type="text" name="gender" value="{{$customer->gender}}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="email">{{ __('customer.email') }}</label>
                                        <input type="text" name="email" value="{{$customer->email}}" class="form-control">
                                        <br/>
                                        <label for="organisasi">{{ __('customer.organisasi') }}</label>
                                        <input type="text" name="organisasi" value="{{$customer->organisasi}}" class="form-control">
                                        </div>
                                        <div class="col">
                                        <label for="telepon">{{ __('customer.telepon') }}</label>
                                        <input type="text" name="telepon" value="{{$customer->telepon}}"  class="form-control">
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>{{ __('customer.alamat') }}</strong>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="alamat">{{ __('customer.alamat') }}</label>
                                        <input type="text" name="alamat" value="{{$customer->alamat}}" class="form-control">
                                        <br/>
                                        <label for="alamat_tambahan">{{ __('customer.alamat_tambahan') }}</label>
                                        <input type="text" name="alamat_tambahan" value="{{$customer->alamat_tambahan}}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="kode_pos">{{ __('customer.kode_pos') }}</label>
                                        <input type="text" name="kode_pos" value="{{$customer->kode_pos}}" class="form-control">
                                        <br/>
                                        <label for="kota">{{ __('customer.kota') }}</label>
                                        <input type="text" name="kota" value="{{$customer->kota}}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="provinsi">{{ __('customer.provinsi') }}</label>
                                        <input type="text" name="provinsi" value="{{$customer->provinsi}}" class="form-control">
                                        <br/>
                                        <label for="negara">{{ __('customer.negara') }}</label>
                                        <input type="text" name="negara" value="{{$customer->negara}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>{{ __('customer.informasi') }}</strong>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="username">{{ __('customer.username') }}</label>
                                            <input type="text" name="username" value="{{$customer->username}}" class="form-control">
                                            <br/>
                                            <label for="password">{{ __('customer.password') }}</label>
                                            <input type="text" name="password" value="{{$customer->password}}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fax_number">{{ __('customer.fax_number') }}</label>
                                            <input type="text" name="fax_number" value="{{$customer->fax_number}}" class="form-control">
                                            <br/>
                                            <label for="note">{{ __('customer.note') }}</label>
                                            <input class="form-control" name="note" value="{{$customer->note}}" type="text" rows="4">
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="konfirmasi_password">{{ __('customer.konfirmasi_password') }}</label>
                                            <input type="text" name="konfirmasi_password" value="{{$customer->konfirmasi_password}}" class="form-control">
                                        </div>
                                    </div>
                                <br/>
                                <button type="submit" class="btn btn-primary btn active" role="button" aria-pressed="true">{{ __('customer.simpan') }}</button>
                                <a href="{{ route('customers.index') }}" class="btn btn-secondary">{{ __('customer.keluar') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>    