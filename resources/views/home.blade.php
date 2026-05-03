@extends('layouts.app')

@section('title', 'Dashboard Overview')

@section('content')

<!-- KPI -->
<div class="grid">
    <div class="kpi">
        <h3>Total Penduduk</h3>
        <h1>40.000.000</h1>
    </div>

    <div class="kpi">
        <h3>Jumlah Kabupaten</h3>
        <h1>38</h1>
    </div>

    <div class="kpi">
        <h3>Kepadatan Rata-rata</h3>
        <h1>850/km²</h1>
    </div>

    <div class="kpi">
        <h3>Rasio Kelamin</h3>
        <h1>101</h1>
    </div>
</div>

<!-- MAP / DASHBOARD -->
<div class="card">
    <iframe src="http://localhost:3000/public/question/a1ff96db-f44a-4434-bea9-de3c134ef948"></iframe>
</div>

@endsection