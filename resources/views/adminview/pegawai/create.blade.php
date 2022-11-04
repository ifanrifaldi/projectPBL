@extends('template.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>
                <div class="card-body">
                    <form action="{{url('admin/pegawai')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama Divisi</label>

                            <select name="id_divisi" class="form-control">
                                <option value=""> Silahkan Pilih Divisi</option>
                                @foreach($list_divisi as $divisi)
                                <option value="{{$divisi->id}}">{{$divisi->nama_divisi}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">NIK</label>
                            <input type="text" class="form-control" name="nik">
                        </div>


                        <div class="form-group">
                            <label for="" class="control-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan">
                        </div>


                        <div class="form-group">
                            <label for="" class="control-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value=""> Pilih Jenis Kelamin</option>
                                <option value="laki-laki"> Laki-Laki</option>
                                <option value="perempuan"> Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        
                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection