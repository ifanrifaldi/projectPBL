
@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{url('pembelian/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No </th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Berat</th>
                            </thead>
                            <tbody>
                                @foreach($list_pembelian as $pembelian)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('pembelian', $pembelian->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('pembelian', $pembelian->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('admin.utils.delete', ['url' => url('pembelian', $pembelian->id)])
                                        </div>
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

@endsection