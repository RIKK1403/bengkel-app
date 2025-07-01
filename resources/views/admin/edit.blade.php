<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Servis</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-semibold mb-6">Edit Data Servis</h2>
        <form action="{{ url('/admin/update/'.$kendaraan->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block font-medium mb-1">Nama</label>
                <input type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $kendaraan->nama }}">
            </div>
            <div>
                <label class="block font-medium mb-1">No HP</label>
                <input type="text" name="nohp" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $kendaraan->nohp }}">
            </div>
            <div>
                <label class="block font-medium mb-1">Plat Nomor</label>
                <input type="text" name="plat_nomor" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $kendaraan->plat_nomor }}">
            </div>
            <div>
                <label class="block font-medium mb-1">Keluhan</label>
                <textarea name="keluhan" class="w-full border border-gray-300 rounded px-3 py-2 h-24 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $kendaraan->keluhan }}</textarea>
            </div>
            <div>
                <label class="block font-medium mb-1">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $kendaraan->tanggal }}">
            </div>
            <div>
                <label class="block font-medium mb-1">Jam</label>
                <input type="time" name="jam" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $kendaraan->jam }}">
            </div>
            <div class="flex justify-end space-x-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Simpan Perubahan</button>
                <a href="{{ route('admin.dashboard') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 transition">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
