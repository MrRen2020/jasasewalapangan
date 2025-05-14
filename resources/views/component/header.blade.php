<!-- Jumbotron -->
<body>
<div class="pt-8 pb-8 bg-gray-100">
    <div class="flex flex-col md:flex-row justify-between items-center px-4">
        <div class="mb-4 md:mb-0">
            <h2 class="text-3xl font-bold uppercase">CarBooks</h2>
        </div>
        <form class="flex flex-row gap-2" method="get" action="blog.php">
            <input type="search" name="cari" placeholder="Cari Nama Mobil" aria-label="Search"
                class="form-input px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" />
            <button type="submit"
                class="px-4 py-2 border border-green-500 text-green-500 rounded-md hover:bg-green-500 hover:text-white transition">
                Search
            </button>
        </form>
    </div>
</div>

<!-- Navbar -->
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-4">
                <a href="index.php" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="blog.php" class="text-gray-700 hover:text-blue-600 font-medium">Daftar Mobil</a>
                <a href="kontak.php" class="text-gray-700 hover:text-blue-600 font-medium">Kontak Kami</a>
                <a href="history.php" class="text-gray-700 hover:text-blue-600 font-medium">History</a>
                <a href="profil.php" class="text-gray-700 hover:text-blue-600 font-medium">Profil</a>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-gray-700 flex items-center gap-1">
                    <i class="fa fa-user"></i> Hallo, Rendi
                </span>
                <a href="#" onclick="return confirm('Apakah anda ingin logout ?');"
                    class="text-red-600 hover:text-red-800 font-medium">Logout</a>
            </div>
        </div>
    </div>
</nav>
</body>