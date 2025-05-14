
@extends('layout.app')

@section('title', 'Beranda')

@section('content')
<!-- Carousel -->
<div class="relative w-full h-[500px] overflow-hidden">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6im-tZ88fztJXORSw6A899UXwPOcjIF-NbQ&s" 
       alt="First slide" 
       class="w-full h-full object-cover">
</div>

<!-- Main Content -->
<div class="container mx-auto mt-10 px-4">
  <div class="flex flex-wrap">
    <!-- Sidebar -->
    <div class="w-full sm:w-1/4 mb-4">
      <div class="bg-gray-300 p-4 rounded shadow">
        <p class="mb-4">Selamat Datang, Rendi</p>
        <div class="flex flex-col gap-2 mb-6">
          <a href="admin/index.php" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded text-center">Dashboard</a>
          <a href="blog.php" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded text-center">Booking Sekarang!</a>
          <a href="admin/logout.php" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded text-center">Logout</a>
        </div>

        <!-- Login Form -->
        <form method="post" action="koneksi/proses.php?id=login">
          <h5 class="text-center font-semibold mb-4">Login</h5>
          <div class="mb-4">
            <label class="block mb-1">Username</label>
            <input type="text" name="user" class="w-full px-3 py-2 border rounded">
          </div>
          <div class="mb-4">
            <label class="block mb-1">Password</label>
            <input type="password" name="pass" class="w-full px-3 py-2 border rounded">
          </div>
          <div class="flex justify-center gap-2">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Login</button>
            <button type="button" onclick="document.getElementById('registerModal').classList.remove('hidden')" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Daftar</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Car List -->
    <div class="w-full sm:w-3/4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded shadow overflow-hidden">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6im-tZ88fztJXORSw6A899UXwPOcjIF-NbQ&s" class="w-full h-52 object-cover">
          <div class="bg-gray-300 p-4">
            <h5 class="font-semibold text-lg">Avanza</h5>
          </div>
          <ul>
            <li class="bg-blue-600 text-white px-4 py-2"><i class="fa fa-check mr-2"></i> Tersedia</li>
            <li class="bg-blue-400 text-white px-4 py-2"><i class="fa fa-check mr-2"></i> Free E-toll 50k</li>
            <li class="bg-gray-800 text-white px-4 py-2"><i class="fa fa-money mr-2"></i> Rp. 200.000/ hari</li>
          </ul>
          <div class="flex justify-center gap-4 p-4">
            <a href="booking.php" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Booking sekarang!</a>
            <a href="detail.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="registerModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
    <div class="flex justify-between items-center border-b p-4">
      <h5 class="text-lg font-semibold">Daftar Pengguna</h5>
      <button onclick="document.getElementById('registerModal').classList.add('hidden')" class="text-xl font-bold">&times;</button>
    </div>
    <form method="post" action="koneksi/proses.php?id=daftar">
      <div class="p-4 space-y-4">
        <div>
          <label class="block mb-1">Nama Pengguna</label>
          <input type="text" name="nama" class="w-full border px-3 py-2 rounded" required>
        </div>
        <div>
          <label class="block mb-1">Username</label>
          <input type="text" name="user" class="w-full border px-3 py-2 rounded" required>
        </div>
        <div>
          <label class="block mb-1">Password</label>
          <input type="password" name="pass" class="w-full border px-3 py-2 rounded" required>
        </div>
      </div>
      <div class="flex justify-end gap-2 border-t p-4">
        <button type="button" onclick="document.getElementById('registerModal').classList.add('hidden')" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">Close</button>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Save</button>
      </div>
    </form>
  </div>
</div>

@endsection