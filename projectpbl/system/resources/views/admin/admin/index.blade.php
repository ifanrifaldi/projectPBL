@extends('template.base')
@section('title', 'Admin | Divisi')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Admin</h4>
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">pengajuan</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li> -->
                        <li class="breadcrumb-item active">Show Admin</li>
                    </ol>
                </div>
                <!--end col-->
                <div class="col-auto align-self-center">
                    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                        <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                        <span class="" id="Select_date">Jan 11</span>
                        <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                    </a>
                    <!-- <a href="#" class="btn btn-sm btn-outline-primary">
                        <i data-feather="download" class="align-self-center icon-xs"></i>
                    </a> -->
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

<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="card-title" style="color: white;">Data Admin</h4>
                <p class="text-muted mb-0">
                </p>
            </div>
            <!--end card-header-->
            <div class="row">
                <div class="col-lg-12 mt-1">

                    <!-- <h4 class="card-title">Daftar Admin</h4> -->
                    {{-- Modal Tambah Pegawai --}}
                    <div class="modal fade" id="tambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ url('admin/admin/tambahadmin') }}" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">Tambahkan Pegawai</h5>
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
                                        <input type="text" name="jabatan" class="form-control  @error('jabatan') is-invalid  @enderror" value="{{ old('jabatan') }}" placeholder="admin">
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
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <center>No</center>
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
                                            <center>Email</center>
                                        </th>
                                        <th scope="col">
                                            <center>Aksi</center>
                                        </th>
                                        <h1>
                                            <a href="#tambah" class="btn btn-outline-primary float-right" data-toggle="modal"><i class="fa fa-plus"></i> Tambah
                                                Data</a>
                                        </h1>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_admin as $pegawai)
                                    <tr>
                                        <th scope="row">
                                            <center>{{ $loop->iteration }}</center>
                                        </th>
                                        <td>
                                            {{ $pegawai->nik }}
                                        </td>
                                        <td>
                                            {{ $pegawai->nama }}
                                        </td>
                                        <td>
                                            {{ $pegawai->jabatan }}
                                        </td>
                                        <td>
                                            {{ $pegawai->email }}
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
                                            <form action="{{ url('admin/admin/editlah', $pegawai->id) }}" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">Edit Data Pegawai
                                                        </h5>
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
                                                        <input type="text" name="jabatan" class="form-control  @error('jabatan') is-invalid  @enderror" value="{{ $pegawai->jabatan }}" placeholder="Jabatan">
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
                                                        <button type="submit" class="btn btn-primary ">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- end Modal EDIT PEGAWAI --}}

                                    {{-- Modal HAPUS PEGAWAI --}}
                                    <div class="modal fade" id="hapus{{ $pegawai->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ url('admin/admin/hapuslah', $pegawai->id) }}" method="post">
                                                @csrf

                                                <div class="modal-content">
                                                    <div class="modal-body bg-primary">
                                                        <h4 class="text-center text-white">Yakin ingin menghapus data ini
                                                            ?!</h4>
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
                    <!--end card-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--end table-->




<!--end card-->



@endsection