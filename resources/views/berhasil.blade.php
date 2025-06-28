<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berhasil Disimpan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2 class="card-title text-success">✅ Data Berhasil Disimpan!</h2>
                <p class="mt-3">Berikut adalah data yang telah kamu simpan:</p>

                <ul class="list-group mb-4">
                    <li class="list-group-item"><strong>Nama:</strong> {{ $kendaraan->nama }}</li>
                    <li class="list-group-item"><strong>No HP:</strong> {{ $kendaraan->nohp }}</li>
                    <li class="list-group-item"><strong>Plat Nomor:</strong> {{ $kendaraan->plat_nomor }}</li>
                    <li class="list-group-item"><strong>Keluhan:</strong> {{ $kendaraan->keluhan }}</li>
                    <li class="list-group-item"><strong>Tanggal:</strong> {{ $kendaraan->tanggal }}</li>
                    <li class="list-group-item"><strong>Jam:</strong> {{ $kendaraan->jam }}</li>
                </ul>

                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">📋 Ke Dashboard Admin</a>
                <a href="{{ url('/daftar') }}" class="btn btn-outline-secondary">➕ Tambah Data Lagi</a>
            </div>
        </div>
    </div>

</body>
</html>
