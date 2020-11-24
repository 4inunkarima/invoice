<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-plus-square-o fa-lg"></i>
                    <strong>Basic Information</strong>
                        </div>
                            <div class="card-body">                
                                <form> 
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ old('nama') }}" required>
                                        <br/>
                                        <label for="gender">Gender</label>
                                            <select id="inputState" name="gender" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                                        <br/>
                                        <label for="organisasi">Nama Organisasi</label>
                                        <input type="text" name="organisasi" class="form-control" placeholder="Nama Organisasi" value="{{ old('organisasi') }}" required>
                                        </div>
                                        <div class="col">
                                        <label for="telepon">Telepon</label>
                                        <input type="text" name="telepon" class="form-control" placeholder="Telepon" value="{{ old('telepon') }}" required>
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
                                <strong>Address</strong>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}" required>
                                        <br/>
                                        <label for="alamat_tambahan">Alamat Tambahan</label>
                                        <input type="text" name="alamat_tambahan" class="form-control" placeholder="Alamat Tambahan" value="{{ old('alamat_tambahan') }}" required>
                                        </div>
                                        <div class="col-md-3">
                                        <label for="kode_pos">Kode Pos</label>
                                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" value="{{ old('kode_pos') }}" required>
                                        <br/>
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" class="form-control" placeholder="Kota" value="{{ old('kota') }}" required>
                                        </div>
                                        <div class="col-md-3">
                                        <label for="provinsi">Pr0vinsi</label>
                                        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="{{ old('provinsi') }}" required>
                                        <br/>
                                        <label for="negara">Negara</label>
                                        <select id="inputState" name="negara" class="form-control" required>
                                            <option selected>Pilih..</option>
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
                                <strong>Aditional Informations</strong>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
                                            <br/>
                                        <label for="password">Password</label>
                                            <input type="text" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fax_number">Fax Number</label>
                                            <input type="text" name="fax_number" class="form-control" placeholder="Fax Number" value="{{ old('fax_number') }}" required>
                                            <br/>
                                            <label for="note">Note</label>
                                            <input class="form-control" name="note" id="exampleFormControlTextarea1" rows="4" placeholder="Note" value="{{ old('note') }}" required>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="konfirmasi_password">Konfirmasi Password</label>
                                            <input type="text" name="konfirmasi_password" class="form-control" placeholder="konfirmasi_password" required>
                                        </div>
                                    </div>
                                <br/>
                                <button type="submit" class="btn btn-primary btn active" role="button" aria-pressed="true">Save</button>
                                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                 </div>
            </div>
        </div>