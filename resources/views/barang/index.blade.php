<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 30px;
        }

        .alert {
            font-size: 1.1rem;
            background-color: #f8d7da;
            color: #842029;
        }

        .table {
            border-radius: 8px;
            overflow: hidden;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            text-align: center;
            vertical-align: middle;
        }

        .table thead {
            background-color: #007bff;
            color: white;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .table td {
            border-bottom: 1px solid #ddd;
        }

        .table .text-center {
            text-align: center;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: bold;
            border: none;
        }

        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Monitoring Barang</h1>

        @if ($error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @else

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kode Barang</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $index => $barang)
                <tr>
                    <td>{{ $barang['id'] }}</td>
                    <td>{{ $barang['nama'] }}</td>
                    <td>{{ $barang['kategori'] }}</td>
                    <td>Rp{{ number_format($barang['harga'], 2, ',', '.') }}</td>
                    <td>{{ $barang['stok'] }}</td>
                    <td>{{ $barang['kode_barang'] }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Data barang tidak ditemukan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @endif

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
