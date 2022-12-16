@extends('template.base')
@section('title','Admin | Validasi')
@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Divisi</h4>
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">pengajuan</a></li> -->
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li> -->
                        <li class="breadcrumb-item active">Show Divisi</li>
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
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="card-title" style="color: white;">Data Divisi</h4>
                </div>
                
                <!--end card-header-->
                <div class="modal fade" id="tambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ url('admin/divisi/create') }}" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">Tambah Divisi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="nama_divisi" class="form-control  @error('nama_divisi') is-invalid  @enderror" value="{{ old('nama_divisi') }}" placeholder="Nama Divisi">
                                    @error('nama_divisi')
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
                <div class="card-body">
                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable"><center>No.</th></center>
                                            <th class="sorting" tabindex="0" aria-controls="datatable"><center>Nama Divisi</th></center>
                                            <th class="sorting" tabindex="0" aria-controls="datatable"><center>Jumlah Pegawai</th></center>
                                            <th class="sorting col-3 " tabindex="0" aria-controls="datatable"><center>Aksi</th></center>
                                            <h1><a href="#tambah" class="btn btn-outline-primary float-right" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Data</a></h1>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_divisi as $satset)
                                        <tr role="row" class="odd">
                                            <td>
                                                <center>{{ $loop->iteration }}</center>
                                            </td>
                                            <td>{{ $satset->nama_divisi }}</td>
                                            <td>
                                                <center>{{ $satset->pegawai->count() }}</center>
                                            </td>

                                            <td>
                                                <center>
                                                    <div class="btn-group-center">
                                                        <a href="{{ url('admin/divisi', $satset->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>
                                                        <a href="#edit{{ $satset->id }}" class="btn btn-outline-secondary" data-toggle="modal">
                                                            <i class="fa fa-edit"></i></a>
                                                        <a href="#hapus{{ $satset->id }}" class="btn btn-danger" data-toggle="modal">
                                                            <i class="fa fa-trash"></i></a>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        {{-- Modal Edit --}}
                                        <div class="modal fade" id="edit{{ $satset->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{ url('admin/divisi/edit', encrypt($satset->id)) }}" method="post">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                            <h5 class="modal-title" id="staticBackdropLabel" style="color: white;">
                                                                Edit Divisi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="text" name="nama_divisi" class="form-control  @error('nama_divisi') is-invalid  @enderror" value="{{ $satset->nama_divisi }}" placeholder="Nama Divisi">
                                                            @error('nama_divisi')
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
                                        {{-- Modal Hapus --}}
                                        <div class="modal fade" id="hapus{{ $satset->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{ url('admin/divisi/hapus', encrypt($satset->id)) }}" method="post">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                            <h5 class="modal-title" id="staticBackdropLabel">
                                                                Hapus</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="text" name="nama_divisi" class="form-control  @error('nama_divisi') is-invalid  @enderror" value="{{ $satset->nama_divisi }}" placeholder="Nama Divisi">
                                                            @error('nama_divisi')
                                                            {{ $message }}
                                                            @enderror
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!--end row-->
</div>

@endsection