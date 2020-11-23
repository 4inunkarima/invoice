                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Basic Information</strong>
                            </div>
                            <div class="card-body">
                                <!-- <div class="media">
                                    <img src="views/customers/prof.png" class="mr-3" alt="prof">
                                    <div class="media-body">
                                    <select id="inputState" class="form-control col-md-4">
                                            <option selected>Pilih...</option>
                                            <option>Individu</option>
                                            <option>Organisation</option>
                                        </select>
                                    </div>
                                </div>
                                <hr /> -->
                                <form>
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                                        <br/>
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="organisasi">Nama Organisasi</label>
                                        <input type="text" name="organisasi" class="form-control" placeholder="Nama Organisasi">
                                        <br/>
                                        <label for="username">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="col">
                                        <label for="mata_uang">Mata Uang</label>
                                        <select id="inputState" name="mata_uang"  class="form-control">
                                            <option selected>Pilih..</option>
                                            <option>IDR</option>
                                            <option>USD</option>
                                        </select>
                                        <br/>
                                        <label for="bahasa">Bahasa</label>
                                        <select id="inputState" name="bahasa" class="form-control">
                                            <option selected>Pilih..</option>
                                            <option>English</option>
                                            <option>Indonesia</option>
                                        </select> 
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
                                <strong>Address</strong>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                                        <br/>
                                        <label for="alamat_tambahan">Alamat Tambahan</label>
                                        <input type="text" name="alamat_tambahan" class="form-control" placeholder="Alamat Tambahan">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="kode_pos">Kode Pos</label>
                                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                                        <br/>
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" class="form-control" placeholder="Kota">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="state">State</label>
                                        <input type="text" name="state" class="form-control" placeholder="State">
                                        <br/>
                                        <label for="negara">Negara</label>
                                        <select id="inputState" name="negara" class="form-control">
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
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Aditional Informations</strong>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" name="telepon" class="form-control" placeholder="Telepon">
                                            <br/>
                                            <label for="gender">Gender</label>
                                            <select id="inputState" name="gender" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fax_number">Fax Number</label>
                                            <input type="text" name="fax_number" class="form-control" placeholder="Fax Number">
                                            <br/>
                                            <label for="note">Note</label>
                                            <input class="form-control" name="note" id="exampleFormControlTextarea1" rows="4" placeholder="Note">
                                        </div>
                                    </div>
                                <hr />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="password">Password</label>
                                            <input type="text" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="konfirmasi_password">Konfirmasi Password</label>
                                            <input type="text" name="konfirmasi_password" class="form-control" placeholder="Konfirmasi Password">
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