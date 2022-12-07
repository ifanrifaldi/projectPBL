@extends('templatedivisi.base')
@section('title', 'Divisi | Dashboard')
@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

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
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

<center>
    <h2>Selamat Datang "{{$pegawai->nama}}"</h2>
</center>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">


            <div class="row justify-content-center">

                <div class="col-md-12 col-lg-12">
                    <div class="card report-card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Pengajuan', 'Diproses', 'Disetujui', 'Ditolak'],
            datasets: [{
                label: 'Grafik Data Divisi',
                data: ['{{$total_pengajuan}}', '{{$diproses}}', '{{$diterima}}', '{{$ditolak}}'],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection

