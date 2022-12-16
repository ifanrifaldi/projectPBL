<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- App css -->
    <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <style>
        .heading{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 24px
        }
        .logo-left img,
        .logo-right img{
            width: 120px;
            height: 120px
        }
        .line span:nth-child(1){
            display: block;
            widows: 100%;
            height: 2px;
            background: var(--gray-dark);
            margin-bottom: 6px;
        }
        .line span:nth-child(2){
            display: block;
            widows: 100%;
            height: 1px;
            background: var(--gray)
        }
    </style>
</head>
<body onload="window.print();">


        <div class="heading">
            <div class="logo-left">
                <img src="{{url('public')}}/assets/images/iar.png" style="width: 120px; height: 120px;" alt="">
            </div>
            <div class="brand p-3 text-center">
                <h2>Sistem Informasi Pengadaan Barang Dan Jasa</h2>
                <h3>Yayasan International Animal Rescue Indonesia (YIARI)</h3>
                <p>Alamat: Sungai Awan Kiri, Kec. Muara Pawan, Kabupaten Ketapang, Kalimantan Barat 78813</p>
            </div>
            <div class="logo-right">
                <img src="{{url('public')}}/assets/images/ti.png"  style="width: 150px; height: 150px;" alt="">
            </div>
        </div>
        <div class="line">
            <span></span>
            <span></span>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                        data-title="Enter username">{{ $list_detail->tgl_pengajuan }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Dibutuhkan:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1"
                                        data-title="Enter username">{{ $list_detail->tgl_dibutuhkan }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Pengaju:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1"
                                        data-title="Enter username">{{ $list_detail->nama_pengaju }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Divisi:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1"
                                        data-title="Enter username">{{ $list_detail->pegawai->divisi->nama_divisi }}</a>
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
                                <td>Daftar Barang:</td>
                                <td>
                                    <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered mb-0 table-centered">
                        <thead>
                            <tr>
                                <th scope="col"><center>no</center></th>
                                <th scope="col"><center>Nama Barang</center></th>
                                <th scope="col"><center>Deskripsi Barang</center></th>
                                <th scope="col"><center>Jumlah</center></th>
                                <th scope="col"><center>Foto Barang</center></th>
                                <th scope="col"><center>Lokasi</center></th>
                                <th class="col float-right"><center>Kategori</center></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_detail->barang as $barang)
                                <tr>
                                    <th scope="row"><center>{{ $loop->iteration }}</center></th>
                                    <td><center>{{ $barang->nama_barang }}</center></td>
                                    <td><center>{{ $barang->ket}}</center></td>
                                    <td><center>{{ $barang->jumlah }}</center></td>
                                    <td><center><img src="{{ url("public/$barang->foto") }}" alt="{{$barang->foto}}" class="img-fluid" style="width:100px;"></center></td>
                                    <td><center>{{ $barang->lokasi }}</center></td>
                                    <td><center>{{ $barang->kategori }}</center></td>
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
                </div>
            </div>
        </div>
</body>
</html>
