@extends('templatedivisi.base')
@section('title', 'Divisi | Deta Pengajuan')
@section('content')


    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Data Pengajuan</h4>
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">pengajuan</a></li> -->
                            <li class="breadcrumb-item"><a href="{{url('divisi/pengajuan')}}"><i class="fas fa-arrow-left"></i> Back</a></li>
                            <li class="breadcrumb-item active">Show Data Pengajuan</li>
                        </ol>
                    </div>
                    <!--end col-->
                    <div class="col-auto align-self-center">
                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                            <span class="" id="Select_date">Jan 11</span>
                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
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
        <div class="col-lg-12 mt-1">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="card-title" style="color: white;">Data Pengajuan</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
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
                                        <a href="#" id="inline-username" data-type="text" data-pk="1"
                                            data-title="Enter username">{{ $list_detail->no_surat }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pengajuan:</td>
                                    <td>
                                        <a href="#" id="inline-username" data-type="text" data-pk="1"
                                            data-title="Enter username">{{$list_detail->created_at->format("d F Y")}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Dibutuhkan:</td>
                                    <td>
                                        <a href="#" id="inline-username" data-type="text" data-pk="1"
                                            data-title="Enter username">{{date("d F Y",strtotime($list_detail->tgl_dibutuhkan))}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Pengaju:</td>
                                    <td>
                                        <a href="#" id="inline-username" data-type="text" data-pk="1"
                                            data-title="Enter username">{{$list_detail->nama_pengaju}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Divisi:</td>
                                    <td>
                                        <a href="#" id="inline-username" data-type="text" data-pk="1"
                                            data-title="Enter username"> {{$pegawai->divisi->nama_divisi}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Kegiatan:</td>
                                    <td>
                                        <a href="#" id="inline-username" data-type="text" data-pk="1"
                                            data-title="Enter username">{{ $list_detail->nama_kegiatan }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status:</td>
                                    <td>
                                        @if ($list_detail->status == 'Diproses')
                                            <span class="badge badge-soft-warning">
                                                {{ $list_detail->status }}
                                            </span>
                                        @endif

                                        @if ($list_detail->status == 'Diterima')
                                            <span class="badge badge-soft-success">
                                                {{ $list_detail->status }}
                                            </span>
                                        @endif

                                        @if ($list_detail->status == 'Ditolak')
                                            <span class="badge badge-soft-danger">
                                                {{ $list_detail->status }}
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Daftar Barang:</td>
                                    <td>
                                        <a href="#" id="inline-username" data-type="text" data-pk="1"
                                            data-title="Enter username"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                         <br>
                        <!-- <table class="table table-striped mb-0" >
                            <thead>
                                <tr>
                                    <td>
                                        <center><h6>Daftar Barang :</h6> </center>
                                    </td>
                                </tr>
                            </thead>
                        </table> -->

                        <table class="table table-bordered mb-0 table-centered">


                            <thead>

                                <tr>
                                    <th scope="col">
                                        <center>no</center>
                                    </th>
                                    <th scope="col">
                                        <center>Nama Barang</center>
                                    </th>
                                    <th scope="col">
                                        <center>Deskripsi Barang</center>
                                    </th>
                                    <th scope="col">
                                        <center>Jumlah</center>
                                    </th>
                                    <th scope="col">
                                        <center>Foto Barang</center>
                                    </th>
                                    <th scope="col">
                                        <center>Lokasi</center>
                                    </th>
                                    <th class="col float-right">
                                        <center>Kategori</center>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_detail->barang as $barang)
                                    <tr>
                                        <th scope="row">
                                            <center>{{ $loop->iteration }}</center>
                                        </th>
                                        <td>
                                            <center>{{ $barang->nama_barang }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $barang->ket }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $barang->jumlah }}</center>
                                        </td>
                                        <td>
                                            <center><img src="{{ url("public/$barang->foto") }}" alt="{{ $barang->foto }}"
                                                    class="img-fluid" style="width:100px;"></center>
                                        </td>
                                        <td>
                                            <center>{{ $barang->lokasi }}</center>
                                        </td>
                                        <td>
                                            <center>{{ $barang->kategori }}</center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table table-bordered mb-0 table-centered mt-3">
                            <thead>
                                <th scope="col">Diketahui</th>
                                <th scope="col">Disetujui</th>
                            </thead>
                            <tbody>
                                <td>{{ $list_detail->diketahui }}</td>
                                <td>{{ $list_detail->disetujui }}</td>
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
