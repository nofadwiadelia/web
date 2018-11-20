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
                    <h2>Data Pemesanan </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>                                                                              
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                        </div>
                    @endif
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No HP</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Total Harga</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $datas)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $datas->nama }}</td>
                                <td>{{ $datas->alamat }}</td>
                                <td>{{ $datas->nohp }}</td>
                                <td>{{ $datas->tglpesan }}</td>
                                <td>{{ $datas->namabarang }}</td>
                                <td>{{ $datas->jmlhpesanan }}</td>
                                <td>{{ $datas->harga }}</td>
                                <td>
                                    <form action="{{ route('pemesanan.destroy', $datas->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('pemesanan.edit',$datas->id) }}" class="btn btn-success">Edit</a>
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