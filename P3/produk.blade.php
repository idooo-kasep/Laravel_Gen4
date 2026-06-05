<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 40px 20px;
            margin: 0;
        }
        h1 {
            text-align: center;
            color: #2d3748;
            margin-bottom: 30px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        }
        thead {
            background-color: #4A90E2;
            color: white;
        }
        thead th {
            padding: 14px 20px;
            text-align: left;
            font-size: 15px;
        }
        tbody tr {
            border-bottom: 1px solid #e2e8f0;
        }
        tbody tr:last-child {
            border-bottom: none;
        }
        tbody tr:hover {
            background-color: #ebf4ff;
        }
        tbody td {
            padding: 14px 20px;
            color: #4a5568;
            font-size: 15px;
        }
        .harga {
            font-weight: bold;
            color: #2d7d46;
        }
        .no {
            width: 40px;
            text-align: center;
            color: #a0aec0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🛒 Daftar Produk</h1>

        <table>
            <thead>
                <tr>
                    <th class="no">No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $index => $item)
                <tr>
                    <td class="no">{{ $index + 1 }}</td>
                    <td>{{ $item['nama_produk'] }}</td>
                    <td class="harga">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
