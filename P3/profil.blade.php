<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
            padding: 40px 50px;
            text-align: center;
            width: 320px;
        }
        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #4A90E2;
            color: white;
            font-size: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        h1 {
            font-size: 22px;
            color: #2d3748;
            margin: 0 0 6px;
        }
        .badge {
            display: inline-block;
            background-color: #ebf4ff;
            color: #4A90E2;
            font-size: 14px;
            padding: 4px 14px;
            border-radius: 20px;
            margin-top: 4px;
        }
        table {
            width: 100%;
            margin-top: 24px;
            border-collapse: collapse;
            text-align: left;
        }
        td {
            padding: 8px 4px;
            color: #4a5568;
            font-size: 15px;
        }
        td:first-child {
            font-weight: bold;
            color: #2d3748;
            width: 80px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="avatar">
            {{ strtoupper(substr($biodata['nama'], 0, 1)) }}
        </div>
        <h1>{{ $biodata['nama'] }}</h1>
        <span class="badge">{{ $biodata['kelas'] }}</span>

        <table>
            <tr>
                <td>Nama</td>
                <td>: {{ $biodata['nama'] }}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: {{ $biodata['kelas'] }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
