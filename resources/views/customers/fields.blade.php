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
                                        <input type="text" name="nama" class="form-control" placeholder="{{ __('customer.nama') }}" value="{{ old('nama') }}" required>
                                        <br/>
                                        <label for="gender">{{ __('customer.gender') }}</label>
                                            <select id="inputState" name="gender" class="form-control" value="{{ old('gender') }}" required>
                                                <option selected>{{ __('customer.pilih') }}</option>
                                                <option>{{ __('customer.male') }}</option>
                                                <option>{{ __('customer.female') }}</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                        <label for="email">{{ __('customer.email') }}</label>
                                        <input type="email" name="email" class="form-control" placeholder="{{ __('customer.email') }}" value="{{ old('email') }}" required>
                                        <br/>
                                        <label for="organisasi">{{ __('customer.organisasi') }}</label>
                                        <input type="text" name="organisasi" class="form-control" placeholder="{{ __('customer.organisasi') }}" value="{{ old('organisasi') }}" required>
                                        </div>
                                        <div class="col">
                                        <label for="telepon">{{ __('customer.telepon') }}</label>
                                        <input type="text" name="telepon" class="form-control" placeholder="{{ __('customer.telepon') }}" value="{{ old('telepon') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <input type="text" name="alamat" class="form-control" placeholder="{{ __('customer.alamat') }}" value="{{ old('alamat') }}" required>
                                        <br/>
                                        <label for="alamat_tambahan">{{ __('customer.alamat_tambahan') }}</label>
                                        <input type="text" name="alamat_tambahan" class="form-control" placeholder="{{ __('customer.alamat_tambahan') }}" value="{{ old('alamat_tambahan') }}" required>
                                        </div>
                                        <div class="col-md-3">
                                        <label for="kode_pos">{{ __('customer.kode_pos') }}</label>
                                        <input type="text" name="kode_pos" class="form-control" placeholder="{{ __('customer.kode_pos') }}" value="{{ old('kode_pos') }}" required>
                                        <br/>
                                        <label for="kota">{{ __('customer.kota') }}</label>
                                        <input type="text" name="kota" class="form-control" placeholder="{{ __('customer.kota') }}" value="{{ old('kota') }}" required>
                                        </div>
                                        <div class="col-md-3">
                                        <label for="provinsi">{{ __('customer.provinsi') }}</label>
                                        <input type="text" name="provinsi" class="form-control" placeholder="{{ __('customer.provinsi') }}" value="{{ old('provinsi') }}" required>
                                        <br/>
                                        <label for="negara">{{ __('customer.negara') }}</label>
                                        <select id="inputState" name="negara" class="form-control" value="{{ old('negara') }}" required>
                                            <option selected>{{ __('customer.pilih') }}</option>
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
                            </div>
                        </div>
                    </div>
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
                                            <input type="text" name="username" class="form-control" placeholder="{{ __('customer.username') }}" value="{{ old('username') }}" required>
                                            <br/>
                                        <label for="password">{{ __('customer.password') }}</label>
                                            <input type="password" name="password" class="form-control" placeholder="{{ __('customer.password') }}" value="{{ old('password') }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fax_number">{{ __('customer.fax_number') }}</label>
                                            <input type="text" name="fax_number" class="form-control" placeholder="{{ __('customer.fax_number') }}" value="{{ old('fax_number') }}" required>
                                            <br/>
                                            <label for="note">{{ __('customer.note') }}</label>
                                            <input class="form-control" name="note" id="exampleFormControlTextarea1" rows="4" placeholder="{{ __('customer.note') }}" value="{{ old('note') }}" required>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="konfirmasi_password">{{ __('customer.konfirmasi_password') }}</label>
                                            <input type="password" name="{{ __('customer.konfirmasi_password') }}" class="form-control" placeholder="Konfirmasi Password" required>
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