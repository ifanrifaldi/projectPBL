@extends('template.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data User
                        <a href="{{url('admin/pegawai/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No </th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Nama Divisi</th>
                            </thead>
                            <tbody>
                                @foreach($list_pegawai as $pegawai)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('pegawai', $pegawai->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('pegawai', $pegawai->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('template.utils.delete', ['url' => url('pegawai', $pegawai->id)])
                                        </div>
                                    </td>
                                    <td>{{$pegawai->nama}}</td>
                                    <td>{{$pegawai->divisi->nama_divisi}}</td>
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