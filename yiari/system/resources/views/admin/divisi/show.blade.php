@extends('template.base')
@section('title', 'Admin | Divisi')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Pegawai</h4>
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">pengajuan</a></li> -->
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div>
                <!--end col-->
                <div class="col-auto align-self-center">
                    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                        <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                        <span class="" id="Select_date">Nov 12</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-self-center icon-xs ml-1">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </a>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-secondary">
                <h4 class="card-title">Data Divisi</h4>
                <p class="text-muted mb-0">
                </p>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th class="w-50">Daftar</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama Divisi:</td>
                            <td>
                                <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{ $list_detail->nama_divisi }}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--end table-->

<h4 class="card-title mb-5">
    <a href="#tambah" class="btn btn-primary float-right" data-toggle="modal"><i class="fa fa-plus"></i>Tambah
        Pegawai</a>
</h4>

<div class="row">
    <div class="col-lg-12 mt-1">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Pegawai</h4>
                {{-- Modal Tambah Pegawai --}}
                <div class="modal fade" id="tambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ url('admin/divisi/tambahpegawai') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_divisi" value="{{ $list_detail->id }}" class="form-control">
                            <div class="modal-content">
                                <div class="modal-header bg-secondary">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambahkan Pegawai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="nik" class="form-control  @error('nik') is-invalid  @enderror" value="{{ old('nik') }}" placeholder="NIK">
                                    @error('nik')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="nama" class="form-control  @error('nama') is-invalid  @enderror" value="{{ old('nama') }}" placeholder="Nama Pegawai">
                                    @error('nama')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="modal-body">
                                    <select class="form-control" name="jk" value="{{ old('jk') }}" placeholder="Jenis Kelamin">
                                        <option>--Pilih--</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jk')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="modal-body">
                                    <select class="form-control" name="jabatan" value="{{ old('jabatan') }}" placeholder="Jenis Kelamin">
                                        <option>--Pilih--</option>
                                        <option value="Staff">Staff</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Assisten Manajer">Assisten Manajer
                                        </option>
                                        <option value="Koordinator">Koordinator</option>
                                        <option value="Assisten Koordinator">Assisten
                                            Koordinator</option>
                                        <option value="Koordinator Medis">Koordinator Medis
                                        </option>
                                        <option value="Fasilitator Pertanian">Fasilitator
                                            Pertanian</option>
                                        <option value="Supervisor AK">Supervisor AK
                                        </option>
                                        <option value="Kepala Camp Teluk Ribas">Kepala Camp
                                            Teluk Ribas</option>
                                    </select>
                                    @error('jabatan')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="email" class="form-control  @error('email') is-invalid  @enderror" value="{{ old('email') }}" placeholder="email">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="password" class="form-control  @error('password') is-invalid  @enderror" value="{{ old('password') }}" placeholder="Password">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Modal Tambah Pegawai End --}}
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-centered">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <center>no</center>
                                </th>
                                <th scope="col">
                                    <center>NIK</center>
                                </th>
                                <th scope="col">
                                    <center>Nama</center>
                                </th>
                                <th scope="col">
                                    <center>Jabatan</center>
                                </th>
                                <th scope="col">
                                    <center>Jenis Kelamin</center>
                                </th>
                                <th scope="col">
                                    <center>Email</center>
                                </th>
                                <th class="col float-right">
                                    <center>Aksi</center>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_detail->pegawai as $pegawai)
                            <tr>
                                <th scope="row">
                                    <center>{{ $loop->iteration }}</center>
                                </th>
                                <td>
                                    <center>{{ $pegawai->nik }}</center>
                                </td>
                                <td>
                                    <center>{{ $pegawai->nama }}</center>
                                </td>
                                <td>
                                    <center>{{ $pegawai->jabatan }}</center>
                                </td>
                                <td>
                                    <center>{{ $pegawai->jk }}</center>
                                </td>
                                <td>
                                    <center>{{ $pegawai->email }}</center>
                                </td>

                                <td scope="row" class="">
                                    <center>
                                        <div class="btn-group">

                                            <a href="#edit{{ $pegawai->id }}" class="btn btn-outline-secondary" data-toggle="modal">
                                                <i class="fa fa-edit"></i></a>
                                            <a href="#hapus{{ $pegawai->id }}" class="btn btn-danger" data-toggle="modal">
                                                <i class="fa fa-trash"></i></a>
                                        </div>
                                    </center>
                                </td>
                            </tr>
                            {{-- Modal EDIT PEGWAWAI --}}
                            <div class="modal fade" id="edit{{ $pegawai->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ url('admin/divisi/editpegawai',$pegawai->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_divisi" value="{{ $list_detail->id }}" class="form-control">
                                        <div class="modal-content">
                                            <div class="modal-header bg-secondary">
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data Pegawai</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="text" name="nik" class="form-control  @error('nik') is-invalid  @enderror" value="{{ $pegawai->nik }}" placeholder="NIK">
                                                @error('nik')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="modal-body">
                                                <input type="text" name="nama" class="form-control  @error('nama') is-invalid  @enderror" value="{{ $pegawai->nama }}" placeholder="Nama Pegawai">
                                                @error('nama')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="modal-body">
                                                <select class="form-control" name="jk" value="{{ $pegawai->jk }}" placeholder="Jenis Kelamin">
                                                    <option>--Pilih--</option>
                                                    <option value="Laki-Laki">Laki-Laki
                                                    </option>
                                                    <option value="Perempuan">Perempuan
                                                    </option>
                                                </select>
                                                @error('jk')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="modal-body">
                                                <select class="form-control" name="jabatan" value="{{ $pegawai->jabatan }}" placeholder="Jenis Kelamin">
                                                    <option>--Pilih--</option>
                                                    <option value="Staff">Staff</option>
                                                    <option value="Supervisor">Supervisor
                                                    </option>
                                                    <option value="Assisten Manajer">
                                                        Assisten Manajer
                                                    </option>
                                                    <option value="Koordinator">Koordinator
                                                    </option>
                                                    <option value="Assisten Koordinator">
                                                        Assisten
                                                        Koordinator</option>
                                                    <option value="Koordinator Medis">
                                                        Koordinator Medis
                                                    </option>
                                                    <option value="Fasilitator Pertanian">
                                                        Fasilitator
                                                        Pertanian</option>
                                                    <option value="Supervisor AK">
                                                        Supervisor AK
                                                    </option>
                                                    <option value="Kepala Camp Teluk Ribas">
                                                        Kepala Camp
                                                        Teluk Ribas</option>
                                                </select>
                                                @error('jabatan')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="modal-body">
                                                <input type="text" name="email" class="form-control  @error('email') is-invalid  @enderror" value="{{ $pegawai->email }}" placeholder="email">
                                                @error('email')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="modal-body">
                                                <input type="text" name="password" class="form-control  @error('password') is-invalid  @enderror" value="{{ old('password') }}" placeholder="Password">
                                                @error('password')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{-- end Modal EDIT PEGAWAI --}}

                            {{-- Modal HAPUS PEGAWAI --}}
                            <div class="modal fade" id="hapus{{ $pegawai->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{ url('admin/divisi/hapuspegawai',$pegawai->id) }}" method="post">
                                        @csrf

                                        <div class="modal-content">
                                            <div class="modal-body bg-danger">
                                                <h4 class="text-center text-white">Yakin ingin menghapus data ini ?!</h4>
                                            </div>
                                            <div class="modal-footer d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                                                <button type="submit" class="btn btn-danger">HAPUS</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- END MODAL HAPUS PEGAWAI --}}
                            @endforeach
                        </tbody>
                    </table>
                    <!--end /table-->
                </div>
                <!--end /tableresponsive-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
</div>
<!--end card-->



@endsection