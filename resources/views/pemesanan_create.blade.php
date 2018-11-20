@extends('base')
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Pemesanan </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                                                                              
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="{{ route('pemesanan.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                      {{ csrf_field() }}
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea type="text" id="alamat" name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nohp">No HP
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="nohp" name="nohp" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tglpesan">Tanggal Pemesanan
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="date" id="tglpesan" name="tglpesan" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang">Nama Barang
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="namabarang" name="namabarang" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jmlhpesanan">Jumlah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="jmlhpesanan" name="jmlhpesanan" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga">Total Harga
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="harga" name="harga" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection