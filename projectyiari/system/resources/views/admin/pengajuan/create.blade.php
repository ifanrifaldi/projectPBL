@extends('template.base')
@section('title','Divisi | Tambah Pengajuan')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Admin Pengajuan</h4>
                            <ol class="breadcrumb">
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Pengajuan</a></li> -->
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">Create</li>
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
    </div><!-- container -->



   
    <div class="container">
        
        <div class="row">
            <div class="col-md-12 mt-5">
                <form action="{{ url('admin/pengajuan') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                    <div class="card-header bg-secondary">
                <h4 class="card-title">Ajukan Barang</h4>
                <p class="text-muted mb-0">
                </p>
            </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="" class="control-label">Nomor</label>
                                <input type="text" class="form-control" name="no_surat" readonly value="{{$nomor}}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Pengajuan</label>
                                        <input type="date" class="form-control" name="tgl_pengajuan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Dibutuhkan</label>
                                        <input type="date" class="form-control" name="tgl_dibutuhkan">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Pengaju</label>
                                        <input type="text" class="form-control" name="nama_pengaju">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Divisi</label>
                                        <input type="text" class="form-control" name="nama_divisi" readonly value="Admin ">
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Id Pegawai</label>
                                        <input type="text" class="form-control" name="id_pegawai">
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Kegiatan</label>
                                        <input type="text" class="form-control" name="nama_kegiatan">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Daftar Permintaan</h4>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table  table-bordered" id="makeEditable">
                                            <thead>
                                                <tr>
                                                    <th>Nama Barang</th>
                                                    <th>Deskripsi Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Foto Barang</th>
                                                    <th>Lokasi</th>
                                                    <th>Kategori</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <tr class="success">
                                                    <td>
                                                        <input type="text" class="form-control" name="nama_barang[]">
                                                    </td>
                                                    <td>
                                                        <textarea name="ket[]" id="ket" class="form-control"></textarea>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="jumlah[]">
                                                    </td>
                                                    <td>
                                                        <input type="file" class="form-control" name="foto[]" accept=".png,">
                                                    </td>
                                                    <td>
                                                       <select class="form-control" name="lokasi[]">
                                                            <option>Pilih</option>
                                                            <option value="111">111</option>
                                                            <option value="222">222</option>
                                                            <option value="333">333</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="kategori[]">
                                                            <option>Pilih</option>
                                                            <option value="Barang">Barang</option>
                                                            <option value="Pangan">Pangan</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <span class="float-right">
                                        <div id="but_add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</div>
                                    </span>
                                    <!--end table-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Diketahui Oleh</label>
                                        <input type="text" class="form-control" name="diketahui" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Disetujui Oleh</label>
                                        <input type="text" class="form-control" name="disetujui" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary float-right"><i class="fa fa-paper-plane"></i> Kirim </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ url('public') }}/assets/js/jquery.min.js"></script>


<script>
    $(document).ready(function() {
        let anok = 0;
        var tbody = '';

        // Function tambah element
        $('#but_add').on('click', function() {

            anok += 1;
            tbody +=
                '<tr id="tr">' +
                '<td>' +
                '<input type="text" class="form-control" name="nama_barang[]">' +
                '</td>' +
                '<td>' +
                '<textarea name="ket[]" id="deskripsi" class="form-control"></textarea>' +
                '</td>' +
                '<td>' +
                '<input type="text" class="form-control" name="jumlah[]">' +
                '</td>' +
                '<td>' +
                '<input type="file" class="form-control" name="foto[]" accept=".png,">' +
                '</td>' +
                '<td>' +
                '<select class="form-control" name="kategori[]">' +
                '<option>Pilih</option>' +
                '<option value="234">Barang234</option>' +
                '<option value="456">456</option>' +
                '</select>' +
                '</td>' +
                '<td>' +
                '<select class="form-control" name="kategori[]">' +
                '<option>Pilih</option>' +
                '<option value="Barang">Barang</option>' +
                '<option value="Pangan">Pangan</option>' +
                '</select>' +
                '</td>' +
                '<td>' +
                '<div class="btn btn-danger " id="hapus" >' +
                'Hapus' +
                '</div>' +
                '</td>' +
                '</tr>';

            $('#tbody').html(tbody);



        })

        $("body").on("click", "#hapus", function() {
            $(this).parents("#tr").remove();
        })



    })
</script>
@endsection