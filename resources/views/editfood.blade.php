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
                    <h2>Edit Food & Beverage</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                                                                              
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="{{ route('food.update', $data->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="file">Gambar Lama
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <img src="{{ URL::to('uploads/file/'.$data->gambar) }}" style="width: 150px; height: 150px;">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" id="gambar" name="gambar" value="{{ $data->gambar }}" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Kategori</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select id="jenis" name="jenis" class="form-control">
                            <option>{{ $data->jenis}}</option>
                            <option>Food</option>
                            <option>Beverage</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="merk">Merk
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="merk" name="merk" value="{{ $data->merk}}" class="form-control col-md-7 col-xs-12">
                            </div>
                      </div>
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga">Harga
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="harga" name="harga" value="{{ $data->harga}}" class="form-control col-md-7 col-xs-12">
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