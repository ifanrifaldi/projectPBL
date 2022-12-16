@extends('templatedivisi.base')

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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pengajuan</a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">Create</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-info" id="Dash_Date">
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
    </div><!-- container -->



    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <form action="{{ url('divisi/pengajuan/edit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            Ajukan Pembelian
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="" class="control-label">Nomor</label>
                                <input type="text" class="form-control" name="nomor" value="{{$pengajuan->no_surat}}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Pengajuan</label>
                                        <input type="date" class="form-control" name="tanggal_pengajuan" value="{{$pengajuan->tgl_pengajuan}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Dibutuhkan</label>
                                        <input type="date" class="form-control" name="tanggal_dibutuhkan" value="{{$pengajuan->tgl_dibutuhkan}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama_pengaju" value="{{$pengajuan->nama}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Divisi</label>
                                        <input type="text" class="form-control" name="nama_divisi" value="{{$pengajuan->nama_divisi}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Id Divisi</label>
                                        <input type="text" class="form-control" name="id_divisi" value="{{$pengajuan->id_divisi}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Kegiatan</label>
                                        <input type="text" class="form-control" name="nama_kegiatan" value="{{$pengajuan->nama_kegiatan}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Status</label>
                                        <select class="form-control" name="status_pengajuan" id="">
                                            <option value="">--Pilih status--</option>
                                            <option value="baru diajukan" @if ($pengajuan->status_pengajuan == 'baru diajukan')
                                                selected
                                            @endif> baru diajukan</option>

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
                                        <input type="text" class="form-control" name="diketahui_oleh" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Disetujui Oleh</label>
                                        <input type="text" class="form-control" name="disetujui_oleh" value="">
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
<script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        let anok = 0;
        var tbody = '';

        // Function tambah element
        $('#but_add').on('click', function() {

            anok += 1;
            tbody +=
                '<tr id="handleDelete'+anok+'" class="success">' +
                    '<td>' +
                        '<input type="text" class="form-control" name="nama_barang">' +
                    '</td>' +
                    '<td>' +
                        '<textarea name="deskripsi_barang" id="deskripsi" class="form-control"></textarea>' +
                    '</td>' +
                    '<td>' +
                        '<input type="text" class="form-control" name="jumlah">' +
                    '</td>' +
                    '<td>' +
                        '<input type="file" class="form-control" name="foto" accept=".png,">' +
                    '</td>' +
                    '<td>' +
                        '<input type="text" class="form-control" name="lokasi">' +
                    '</td>' +
                    '<td>' +
                        '<select class="form-control" name="kategori">' +
                            '<option>Pilih</option>' +
                            '<option value="Barang">Barang</option>' +
                            '<option value="Pangan">Pangan</option>' +
                        '</select>' +
                    '</td>' +
                    '<td>' +
                        '<div class="btn btn-danger" id="hapus" data-theme=" '+anok+' ">' +
                            'HAPUS' +
                        '</div>' +
                    '</td>' +
                '</tr>';

                $('#tbody').html(tbody);

                $("#hapus").on('click', function(){

                    var $this = $(this);

                    console.log($this.data('theme'))
                })


        })





    })
</script>
