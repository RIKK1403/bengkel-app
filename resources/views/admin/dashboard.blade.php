<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin Bengkel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white px-6 py-4 flex justify-between items-center">
        <a href="#" class="text-xl font-bold">Bengkel Admin</a>
        <a href="{{ route('logout') }}" class="text-sm border border-white px-3 py-1 rounded hover:bg-white hover:text-gray-800 transition">Logout</a>
    </nav>

    <!-- Container -->
    <div class="max-w-6xl mx-auto mt-6 px-4">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Dashboard Servis Kendaraan</h2>
            <a href="{{ url('/daftar') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">+ Tambah Data</a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto bg-white shadow rounded">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">No HP</th>
                        <th class="px-4 py-2 text-left">Plat Nomor</th>
                        <th class="px-4 py-2 text-left">Keluhan</th>
                        <th class="px-4 py-2 text-left">Tanggal</th>
                        <th class="px-4 py-2 text-left">Jam</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($kendaraans as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $item->nama }}</td>
                        <td class="px-4 py-2">{{ $item->nohp }}</td>
                        <td class="px-4 py-2">{{ $item->plat_nomor }}</td>
                        <td class="px-4 py-2">{{ $item->keluhan }}</td>
                        <td class="px-4 py-2">{{ $item->tanggal }}</td>
                        <td class="px-4 py-2">{{ $item->jam }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ url('/admin/edit/'.$item->id) }}" class="bg-yellow-400 text-black px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                            <form action="{{ url('/admin/delete/'.$item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center px-4 py-3">Belum ada data servis</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-sm text-gray-600 py-4 mt-10">
        &copy; {{ date('Y') }} Bengkel Cahaya Motor. All Rights Reserved.
    </footer>

</body>
</html>
