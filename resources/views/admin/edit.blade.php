<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Servis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2>Edit Data Servis</h2>
            <form action="{{ url('/admin/update/'.$kendaraan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $kendaraan->nama }}">
                </div>
                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text" name="nohp" class="form-control" value="{{ $kendaraan->nohp }}">
                </div>
                <div class="mb-3">
                    <label>Plat Nomor</label>
                    <input type="text" name="plat_nomor" class="form-control" value="{{ $kendaraan->plat_nomor }}">
                </div>
                <div class="mb-3">
                    <label>Keluhan</label>
                    <textarea name="keluhan" class="form-control">{{ $kendaraan->keluhan }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $kendaraan->tanggal }}">
                </div>
                <div class="mb-3">
                    <label>Jam</label>
                    <input type="time" name="jam" class="form-control" value="{{ $kendaraan->jam }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
