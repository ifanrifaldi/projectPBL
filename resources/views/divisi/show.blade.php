@extends('adminview.base')

@section('content')
    
        
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                    <div class="card">
                    <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Data User
                        <a href="{{url('divisi', $divisi->id)}}/edit" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Edit Data </a>
                    </div>
                    <div class="card-body">
                        <h3> Nama Divisi: {{$divisi->nama_divisi}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection