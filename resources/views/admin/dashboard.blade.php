<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin Bengkel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">Bengkel Admin</a>
        <div class="ms-auto">
            <a href="#" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Dashboard Servis Kendaraan</h2>
            <a href="{{ url('/daftar') }}" class="btn btn-success">+ Tambah Data</a>
        </div>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Plat Nomor</th>
                    <th>Keluhan</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kendaraans as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nohp }}</td>
                    <td>{{ $item->plat_nomor }}</td>
                    <td>{{ $item->keluhan }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jam }}</td>
                    <td>
                        <a href="{{ url('/admin/edit/'.$item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ url('/admin/delete/'.$item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data servis</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <footer class="bg-light text-center py-3 mt-5">
        &copy; {{ date('Y') }} Bengkel Cahaya Motor. All Rights Reserved.
    </footer>
</body>
</html>
