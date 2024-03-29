@extends('template.base')
@section('title','Admin | Validasi')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Validasi</h4>
                            <ol class="breadcrumb">
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Dastyle</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li> -->
                                <li class="breadcrumb-item active">Show Validasi</li>
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
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download align-self-center icon-xs">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                            </a> -->
                        </div>

                        <!-- <div class="col-auto align-self-center d-flex">
                            <form action="{{url('admin/validasi/filter')}}" method="post">
                                @csrf
                                <input value="Diproses" class="form-control" name="status" hidden>
                                <button class="btn btn-sm btn-outline-primary"> Diproses </button>
                            </form>
                            <form action="{{url('admin/validasi/filter')}}" method="post">
                                @csrf
                                <input value="Diterima" class="form-control" name="status" hidden>
                                <button class="btn btn-sm btn-outline-primary" style="margin-left: 5%;"> Diterima </button>
                            </form>
                            <form action="{{url('admin/validasi/filter')}}" method="post">
                                @csrf
                                <input value="Ditolak" class="form-control" name="status" hidden>
                                <button class="btn btn-sm btn-outline-primary" style="margin-left: 10%;"> Ditolak</button>
                            </form>
                            <a href="{{url('admin/validasi')}}" class="btn btn-sm btn-outline-primary" style="margin-left: 5%;">All</a>
                        </div> -->
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->


        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col-auto align-self-center d-flex" style="float: right;">
                        <form action="{{url('admin/validasi/filter')}}" method="post">
                                @csrf
                                <input value="Diproses" class="form-control" name="status" hidden>
                                <button class="btn btn-sm btn-outline-primary" style="margin-left: 20%;" > Diproses </button>
                            </form>
                            <form action="{{url('admin/validasi/filter')}}" method="post">
                                @csrf
                                <input value="Diterima" class="form-control" name="status" hidden>
                                <button class="btn btn-sm btn-outline-primary" style="margin-left: 25%;"> Diterima </button>
                            </form>
                            <form action="{{url('admin/validasi/filter')}}" method="post">
                                @csrf
                                <input value="Ditolak" class="form-control" name="status" hidden>
                                <button class="btn btn-sm btn-outline-primary" style="margin-left: 35%;"> Ditolak</button>
                            </form>
                            <a href="{{url('admin/validasi')}}" class="btn btn-sm btn-outline-primary" style="margin-left: 10%;">All</a>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- filter -->



        <!-- filter -->
        <!-- end page title end breadcrumb -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="card-title" style="color: white;">Data Validasi</h4>
                            <p class="text-muted mb-0">
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <!--end card-header-->

                                    <div class="card-body">
                                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 ">
                                                    <div class="table-responsive">
                                                        <table id="datatable" class="table table-bordered mb-3 table-centered" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                                            <!-- <div class="col-auto align-self-center d-flex" style="float: right;">
                                                                <form action="{{url('admin/validasi/filter')}}" method="post">
                                                                    @csrf
                                                                    <input value="Diproses" class="form-control" name="status" hidden>
                                                                    <button class="btn btn-sm btn-outline-primary"> Diproses </button>
                                                                </form>
                                                                <form action="{{url('admin/validasi/filter')}}" method="post">
                                                                    @csrf
                                                                    <input value="Diterima" class="form-control" name="status" hidden>
                                                                    <button class="btn btn-sm btn-outline-primary"> Diterima </button>
                                                                </form>
                                                                <form action="{{url('admin/validasi/filter')}}" method="post">
                                                                    @csrf
                                                                    <input value="Ditolak" class="form-control" name="status" hidden>
                                                                    <button class="btn btn-sm btn-outline-primary"> Ditolak</button>
                                                                </form>
                                                                <a href="{{url('admin/validasi')}}" class="btn btn-sm btn-outline-primary">All</a>
                                                            </div> -->
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable">no.</th>
                                                                    <!-- <th class="sorting" tabindex="0" aria-controls="datatable">Nomor Surat</th> -->
                                                                    <th class="sorting" tabindex="0" aria-controls="datatable">Nama Pengaju</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="datatable">Tanggal Diajukan</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="datatable">Tanggal Dibutuhkan</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="datatable">
                                                                        <center>Status</center>
                                                                    </th>
                                                                    <th class="sorting" tabindex="0" aria-controls="datatable">
                                                                        <center>Aksi</center>
                                                                    </th>
                                                                </tr>
                                                            </thead>


                                                            <tbody>
                                                                @foreach ($list_pengajuan as $pengabdi)
                                                                <tr role="row" class="odd">

                                                                    <td>{{$loop->iteration}}</td>
                                                                    <!-- <td>{{$pengabdi->no_surat}}</td> -->
                                                                    <td>{{$pengabdi->nama_pengaju}}</td>
                                                                    <td>{{$pengabdi->created_at->format("d F Y")}}</td>
                                                                    <td>{{date("d F Y",strtotime($pengabdi->tgl_dibutuhkan))}}</td>
                                                                    <td>
                                                                        <center>
                                                                            @if($pengabdi->status == 'Diproses')
                                                                            <span class="badge badge-soft-warning">
                                                                                {{$pengabdi->status}}
                                                                            </span>
                                                                            @endif

                                                                            @if($pengabdi->status == 'Diterima')
                                                                            <span class="badge badge-soft-success">
                                                                                {{$pengabdi->status}}
                                                                            </span>
                                                                            @endif

                                                                            @if($pengabdi->status == 'Ditolak')
                                                                            <span class="badge badge-soft-danger">
                                                                                {{$pengabdi->status}}
                                                                            </span>
                                                                            @endif
                                                                        </center>
                                                                    </td>
                                                                    <td>
                                                                        <center>
                                                                            <div class="btn-group-center">
                                                                                <a href="{{url('admin/validasi',$pengabdi->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>
                                                                                <a href="{{url('admin/pengajuan/hapus',$pengabdi->id)}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Pengajuan')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                                            </div>
                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <!--end row-->

                    </div><!-- container -->

                </div>
            </div>
        </div>


        <!-- <form action="{{url('admin/validasi/filter')}}" method="post">
                @csrf -->
        <!-- <div class="form-group">
                    <label for="" class=form-label>Status</label>
                    <select name="status" class="form-select">
                        <option value="">Status</option>
                        <option value="Diproses">Diproses </option>
                        <option value="Diterima">Diterima</option>
                        <option value="Diterima">Ditolak</option>
                    </select>
                </div> -->

        <!-- <div class="form-group">
                    <label for="" class=form-label>Status</label>
                    <select name="status" class="form-select">
                        <option value="">Status</option>
                        <option value="Diproses">Diproses </option>
                        <option value="Diterima">Diterima</option>
                        <option value="Diterima">Ditolak</option>
                    </select>
                </div> -->
        <!-- <form action="{{url('admin/validasi/filter')}}" method="post">
                    @csrf
                    <input value="Diterima" class="form-control" name="status">

                    <button class="btn btn-primary float-right"><i class="fa fa-search"></i> Filter </button>
                </form> -->
        @endsection