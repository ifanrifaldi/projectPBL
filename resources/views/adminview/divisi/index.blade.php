@extends('template.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data User
                        <a href="{{url('admin/divisi/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No </th>
                                <th>Aksi</th>
                                <th>Nama Divisi</th>
                            </thead>
                            <tbody>
                                @foreach($list_divisi as $divisi)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('divisi', $divisi->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('divisi', $divisi->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('template.utils.delete', ['url' => url('admin/divisi', $divisi->id)])
                                        </div>
                                    </td>
                                    <td>{{$divisi->nama_divisi}}</td>
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