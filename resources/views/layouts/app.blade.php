<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:'Inter', sans-serif; }

body { display:flex; background:#f1f5f9; }

/* SIDEBAR */
.sidebar {
    width:240px;
    height:100vh;
    background:#0f172a;
    color:white;
    padding:20px;
    position:fixed;
}

.sidebar h2 { margin-bottom:30px; }

.sidebar a {
    display:block;
    color:#cbd5f5;
    text-decoration:none;
    padding:10px;
    border-radius:8px;
    margin-bottom:10px;
    transition:0.3s;
}

.sidebar a:hover,
.active {
    background:#1e293b;
    color:white;
}

/* MAIN */
.main {
    margin-left:240px;
    width:calc(100% - 240px);
}

/* HEADER */
.header {
    background:white;
    padding:15px 25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 6px rgba(0,0,0,0.05);
}

.header h1 { font-size:20px; }

/* CONTENT */
.content { padding:20px; }

/* CARD */
.card {
    background:white;
    border-radius:12px;
    padding:20px;
    box-shadow:0 4px 10px rgba(0,0,0,0.05);
}

/* GRID KPI */
.grid {
    display:grid;
    grid-template-columns: repeat(4, 1fr);
    gap:15px;
    margin-bottom:20px;
}

.kpi {
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,0.05);
}

.kpi h3 { font-size:14px; color:#64748b; }
.kpi h1 { font-size:22px; margin-top:10px; }

/* IFRAME */
iframe {
    width:100%;
    height:75vh;
    border:none;
    border-radius:10px;
}

/* RESPONSIVE */
@media(max-width:900px){
    .grid { grid-template-columns: repeat(2,1fr); }
}

@media(max-width:600px){
    .sidebar { display:none; }
    .main { margin-left:0; width:100%; }
    .grid { grid-template-columns:1fr; }
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>📊 Dashboard</h2>

    <a href="/home" class="{{ request()->is('home') ? 'active' : '' }}">🏠 Home</a>
    <a href="/data-penduduk" class="{{ request()->is('data-penduduk') ? 'active' : '' }}">📍 Data</a>
    <a href="/statistik" class="{{ request()->is('statistik') ? 'active' : '' }}">📈 Statistik</a>
    <a href="/settings" class="{{ request()->is('settings') ? 'active' : '' }}">⚙️ Settings</a>
</div>

<!-- MAIN -->
<div class="main">

    <!-- HEADER -->
    <div class="header">
        <h1>@yield('title')</h1>
        <div>Admin 👤</div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>