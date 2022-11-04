@extends('template.pegawai')

@section('content')


<div class="page-content">
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Show</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div><!--end col-->  
                    </div><!--end row-->                                                              
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(56, 204, 209);">
                        <h4 class="card-title">Data Yang Diajukan</h4>
                        <p class="text-muted mb-0">
                        </p>
                    </div><!--end card-header-->
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
                            <td>Nomor:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->nomor}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengajuan:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->tanggal_pengajuan}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Dibutuhkan:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->tanggal_dibutuhkan}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Pengaju:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->nama_pengaju}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Divisi:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->nama_divisi}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Kegiatan:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->nama_kegiatan}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Barang:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->nama_barang}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi Barang:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->deskripsi_barang}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->jumlah}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lokasi:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->lokasi}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kategori:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->kategori}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Foto Barang:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">

                                    <div class="col d-md-flex">
                                        <div class="bg-light">
                                        <img src="{{url("public",$pembelian->foto)}}" alt="" style="width:100px">
                                        </div>
                                    </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Diketahui Oleh:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->diketahui_oleh}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Disetujui Oleh:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{$pembelian->disetujui_oleh}}</a>
                                </td>
                            </tr>
                            
                            </tbody>
                        </table><!--end table-->        
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

</div>

@endsection