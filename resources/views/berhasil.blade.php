<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berhasil Disimpan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-green-600 flex items-center gap-2 mb-3">✅ Data Berhasil Disimpan!</h2>
        <p class="mb-4 text-gray-700">Berikut adalah data yang telah kamu simpan:</p>

        <ul class="divide-y divide-gray-200 border border-gray-300 rounded mb-6">
            <li class="px-4 py-2"><strong>Nama:</strong> {{ $kendaraan->nama }}</li>
            <li class="px-4 py-2"><strong>No HP:</strong> {{ $kendaraan->nohp }}</li>
            <li class="px-4 py-2"><strong>Plat Nomor:</strong> {{ $kendaraan->plat_nomor }}</li>
            <li class="px-4 py-2"><strong>Keluhan:</strong> {{ $kendaraan->keluhan }}</li>
            <li class="px-4 py-2"><strong>Tanggal:</strong> {{ $kendaraan->tanggal }}</li>
            <li class="px-4 py-2"><strong>Jam:</strong> {{ $kendaraan->jam }}</li>
        </ul>

        <div class="flex space-x-3">
            <a href="{{ route('admin.dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                📋 Ke Dashboard Admin
            </a>
            <a href="{{ url('/daftar') }}" class="border border-gray-400 text-gray-700 px-4 py-2 rounded hover:bg-gray-100 transition">
                ➕ Tambah Data Lagi
            </a>
        </div>
    </div>

</body>
</html>
