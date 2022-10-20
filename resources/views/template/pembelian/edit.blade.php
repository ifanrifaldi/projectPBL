@extends('template.base')

@section('content')
<div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Si Nalar</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pembelian</a></li>
                                            <li class="breadcrumb-item">Dashboard</li>
                                            <li class="breadcrumb-item active">Create</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-info" id="Dash_Date">
                                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                        </a>
                                        <!-- <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a> -->
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                </div><!-- container -->

<div class="container">

    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
        <form action="{{url('divisi/pembelian', $pembelian->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method("PUT")
          <div class="card">
            <div class="card-header">
              Edit Data Pembelian
            </div>
            <div class="card-body">
                  <div class="form-group">
                      <label for="" class="control-label">Nomor</label>
                      <td>{{$pembelian->nomor}}</td>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" name="tanggal_pengajuan" value="{{$pembelian->tanggal_pengajuan}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Dibutuhkan</label>
                            <input type="date" class="form-control" name="tanggal_dibutuhkan" value="{{$pembelian->tanggal_dibutuhkan}}">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$pembelian->nama}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Divisi</label>
                            <select class="form-control" name="nama_divisi" value="">
                        <option>{{$pembelian->nama_divisi}}</option>
                        <option value="iarrrrr">Divisi-1</option>
                        <option value="iarrrrr">Divisi-2</option>
                        <option value="iarrrrr">Divisi-3</option>
                        <option value="iarrrrr">Divisi-4</option>
                        <option value="iarrrrr">Divisi-6</option>
                        <option value="iarrrrr">Divisi-7</option>
                        <option value="iarrrrr">Divisi-8</option>
                        <option value="iarrrrr">Divisi-9</option>
                    </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                         <label for="" class="control-label">Nama Kegiatan</label>
                         <input type="text" class="form-control" name="nama_kegiatan" value="{{$pembelian->nama_kegiatan}}">
                        </div>
                    </div>
                  </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
                  <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{$pembelian->nama_barang}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">foto</label>
                            <input type="file" class="form-control" name="foto" accept=".png,">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Deskripsi Barang</label>
                      <textarea name="deskripsi_barang" id="deskripsi" class="form-control">{{$pembelian->deskripsi_barang}}</textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{$pembelian->jumlah}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" value="{{$pembelian->lokasi}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Class</label>
                            <select class="form-control" name="class">
                        <option>{{$pembelian->class}}</option>
                        <option value="Barang">Barang</option>
                        <option value="Pangan">Pangan</option>
                    </select>
                        </div>
                    </div>
                  </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Diketahui Oleh</label>
                            <input type="text" class="form-control" name="diketahui_oleh" value="{{$pembelian->diketahui_oleh}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Disetujui Oleh</label>
                            <input type="text" class="form-control" name="disetujui_oleh" value="{{$pembelian->disetujui_oleh}}">
                        </div>
                    </div>
                   </div>
            </div>
          </div>
          <button class="btn-primary float-right"><i class="fa fa-paper-plane"></i> Kirim </button>
        </form>
        </div>
      </div>
    </div>

@endsection


@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote();
        });
    </script>
@endpush