@extends('layouts.app')

@section('title', 'Statistik Penduduk')

@section('content')

<style>

/* GRID UTAMA */
.grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

/* CARD */
.card {
    background: white;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

/* TITLE */
.card h3 {
    font-size: 15px;
    margin-bottom: 10px;
    color: #0f172a;
}

/* IFRAME SIZE SERAGAM */
iframe {
    width: 100%;
    height: 500px;
    border: none;
    border-radius: 10px;
}

/* FULL WIDTH CARD */
.full {
    grid-column: span 2;
}

/* RESPONSIVE */
@media(max-width:768px){
    .grid {
        grid-template-columns: 1fr;
    }

    .full {
        grid-column: span 1;
    }
}

</style>

<div class="grid">

    <!-- DASHBOARD UTAMA -->
    <div class="card full">
        <h3> Data Statistik Pendidikan di Jawa Timur</h3>
        <iframe src="http://localhost:3000/public/question/43d812fc-7f6e-47d5-822a-9be6fef9a959"></iframe>
    </div>

     <div class="card full">
        <h3> Pemetaan Data Pendidikan </h3>
        <iframe src="http://localhost:3000/public/question/a1ff96db-f44a-4434-bea9-de3c134ef948"></iframe>
    </div>

    <div class="card full">
        <h3> Rasio Jumlah Sekolah Pertingkat Terhadap Jumlah Siswa </h3>
        <iframe src="http://localhost:3000/public/question/9de61f29-f79a-483a-bf82-54eb53e9821a"></iframe>
    </div>

    <div class="card full">
        <h3> Rasio Jumlah Murid SD Persekolahan </h3>
        <iframe src="http://localhost:3000/public/question/fc0afab5-9888-412a-b45f-dfcfeaadc5c4"></iframe>
    </div>

    <div class="card full">
        <h3> Rasio Jumlah Murid SMP Persekolahan </h3>
        <iframe src="http://localhost:3000/public/question/3e7faf4e-8364-46e3-bb15-d036889c977b"></iframe>
    </div>

    <div class="card full">
        <h3> Rasio Jumlah Murid SMA Persekolahan </h3>
        <iframe src="http://localhost:3000/public/question/4f6a10b7-1bc6-4b9d-982e-86f8187c70e9"></iframe>
    </div>


</div>

@endsection