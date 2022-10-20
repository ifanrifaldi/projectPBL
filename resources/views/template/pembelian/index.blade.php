@extends('template.base')

@section('content')
<div class="container-fluid">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Si Nalar</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pembelian</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-info" id="Dash_Date">
                                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    <!-- end page title end breadcrumb -->
                </div><!-- container -->

<div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Pembelian
                                    <a href="{{url('divisi/pembelian/create')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i>Tambah Data</a> </h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Divisi</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Status</th>
                                                <th class="text-right">Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($list_pembelian as $pembelian)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$pembelian->nama_divisi}}</td>
                                                    <td>{{$pembelian->created_at->format("d F Y")}}</td>
                                                    <td><span class="badge badge-soft-success menu-arrow">diproses</span></td>
                                                    <td>
                                                        <div class="btn-group float-right">
                                                            <a href="{{url('divisi/pembelian', $pembelian->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                                            <a href="{{url('divisi/pembelian', $pembelian->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                            @include('template.utils.delete', ['url'=>url('divisi/pembelian', $pembelian->id)])
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
</div>
@endsection