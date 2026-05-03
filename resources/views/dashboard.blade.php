<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jawa Timur</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            display: flex;
            background: #f1f5f9;
        }

        /* SIDEBAR */
        .sidebar {
            width: 240px;
            height: 100vh;
            background: #0f172a;
            color: white;
            padding: 20px;
            position: fixed;
        }

        .sidebar h2 {
            margin-bottom: 30px;
            font-size: 20px;
        }

        .sidebar a {
            display: block;
            color: #cbd5f5;
            text-decoration: none;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #1e293b;
            color: white;
        }

        /* MAIN */
        .main {
            margin-left: 240px;
            width: calc(100% - 240px);
        }

        /* HEADER */
        .header {
            background: white;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        .header h1 {
            font-size: 20px;
            color: #0f172a;
        }

        .user {
            font-size: 14px;
            color: #64748b;
        }

        /* CONTENT */
        .content {
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        iframe {
            width: 100%;
            height: 80vh;
            border: none;
            border-radius: 10px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>📊 Dashboard</h2>

        <a href="#">🏠 Home</a>
        <a href="#">📍 Data Penduduk</a>
        <a href="#">📈 Statistik</a>
        <a href="#">⚙️ Settings</a>
    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- HEADER -->
        <div class="header">
            <h1>Dashboard Penduduk Jawa Timur</h1>
            <div class="user">Hi, Admin 👋</div>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <div class="card">
                <iframe 
                    src="http://localhost:3000/public/dashboard/3abc3c8e-f32a-499f-8f9e-f8ac96a48511">
                </iframe>
            </div>
        </div>

    </div>

</body>
</html>