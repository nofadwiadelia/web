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
                    <h2>Shopping Cart </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                                                                              
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Gambar</th>
                          <th>Jenis Barang</th>
                          <th>Merk</th>
                          <th>Harga</th>
                          <th>Kategori</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $data)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td><img src="{{ URL::to('uploads/file/'.$data->gambar) }}" style="width: 150px; height: 150px;"> </td>
                                <td>{{ $data->jenis }}</td>
                                <td>{{ $data->merk }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->kategori}} </td>
                                <td>
                                    <form action="{{ route('cart.destroy', $data->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('cart.edit',$data->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection