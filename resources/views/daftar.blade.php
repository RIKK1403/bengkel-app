<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Layanan Bengkel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Formulir Pendaftaran Servis</h2>
    <form action="/simpan" method="POST" class="space-y-4">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text" id="nama" name="nama" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="nohp" class="block text-sm font-medium text-gray-700">No HP</label>
        <input type="tel" id="nohp" name="nohp" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="plat_nomor" class="block text-sm font-medium text-gray-700">Plat Nomor</label>
        <input type="text" id="plat_nomor" name="plat_nomor" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="keluhan" class="block text-sm font-medium text-gray-700">Keluhan</label>
        <textarea id="keluhan" name="keluhan" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
      </div>

      <div>
        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <div>
        <label for="jam" class="block text-sm font-medium text-gray-700">Jam</label>
        <input type="time" id="jam" name="jam" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">Kirim</button>
    </form>
  </div>
</body>
</html>
