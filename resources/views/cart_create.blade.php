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
                    <h2>Tambah Cart </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                                                                              
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                      {{ csrf_field() }}
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" id="gambar" name="gambar" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Jenis
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="jenis" name="jenis" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="merk">Merk
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="merk" name="merk" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga">Harga
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="harga" name="harga" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori">Kategori</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select id="kategori" name="kategori" class="form-control">
                            <option>Choose option</option>
                            <option >Fashion</option>
                            <option >Food & Beverage</option>
                          </select>
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