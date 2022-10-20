@extends('adminview.base')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('user')}}" method="post">
                            @csrf                       
                            <div class="form-group">
                                <label for="" class="control-label">ID</label>
                                <input type="text" class="form-control" name="id_user">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="text" class="form-control " name="password">
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection