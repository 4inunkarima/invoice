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
                                        <input type="text" name="nama" value="{{$customer->email}}" class="form-control" >
                                        <br/>
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="{{$customer->email}}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="organisasi">Nama Organisasi</label>
                                        <input type="text" name="organisasi" value="{{$customer->organisasi}}" class="form-control">
                                        <br/>
                                        <label for="username">Username</label>
                                        <input type="text" name="username" value="{{$customer->username}}" class="form-control">
                                        </div>
                                        <div class="col">
                                        <label for="mata_uang">Mata Uang</label>
                                        <input type="text" name="mata_uang" value="{{$customer->mata_uang}}"  class="form-control">
                                        <br/>
                                        <label for="bahasa">Bahasa</label>
                                        <input type="text" name="bahasa" value="{{$customer->bahasa}}" class="form-control">
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
                                        <input type="text" name="alamat" value="{{$customer->alamat}}" class="form-control">
                                        <br/>
                                        <label for="alamat_tambahan">Alamat Tambahan</label>
                                        <input type="text" name="alamat_tambahan" value="{{$customer->alamat_tambahan}}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="kode_pos">Kode Pos</label>
                                        <input type="text" name="kode_pos" value="{{$customer->kode_pos}}" class="form-control">
                                        <br/>
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" value="{{$customer->kota}}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="state">State</label>
                                        <input type="text" name="state" value="{{$customer->state}}" class="form-control">
                                        <br/>
                                        <label for="negara">Negara</label>
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
                                <strong>Aditional Informations</strong>
                            </div>
                            <div class="card-body">
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" name="telepon" value="{{$customer->telepon}}" class="form-control">
                                            <br/>
                                            <label for="gender">Gender</label>
                                            <input type="text" name="gender" value="{{$customer->gender}}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fax_number">Fax Number</label>
                                            <input type="text" name="fax_number" value="{{$customer->fax_number}}" class="form-control">
                                            <br/>
                                            <label for="note">Note</label>
                                            <input class="form-control" name="note" value="{{$customer->note}}" type="text" rows="4">
                                        </div>
                                    </div>
                                <hr />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="password">Password</label>
                                            <input type="text" name="password" value="{{$customer->password}}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="konfirmasi_password">Konfirmasi Password</label>
                                            <input type="text" name="konfirmasi_password" value="{{$customer->konfirmasi_password}}" class="form-control">
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