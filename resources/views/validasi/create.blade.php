@extends('adminview.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
        <form action="{{url('validasi')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <div class="card-header">
              Ajukan Pembelian
            </div>
            <div class="card-body">
                  <div class="form-group">
                      <label for="" class="control-label">Nomor</label>
                      <input type="text" class="form-control" name="nomor">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Pengajuan</label>
                            <input type="text" class="form-control" name="tanggal_pengajuan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Dibutuhkan</label>
                            <input type="text" class="form-control" name="tanggal_dibutuhkan">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Divisi</label>
                            <input type="text" class="form-control" name="nama_divisi">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="control-label">Nama Kegiatan</label>
                      <input type="text" class="form-control" name="nama_kegiatan">
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
                            <input type="text" class="form-control" name="nama_barang">
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
                      <textarea name="deskripsi" id="deskripsi" class="deskripsi_barang"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Class</label>
                            <input type="text" class="form-control" name="class">
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
                            <input type="text" class="form-control" name="diketahui_oleh">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Disetujui Oleh</label>
                            <input type="text" class="form-control" name="disetujui_oleh">
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