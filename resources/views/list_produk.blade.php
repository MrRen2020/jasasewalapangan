{{-- resources/views/list_produk.blade.php --}}
@include('layout.app2')

@section('content')
    <div class="p-4">
        <h1 class="text-xl font-bold mb-4">Daftar Produk</h1>
        {{-- Your styled table here --}}
    </div>
@endsection

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-blue-500 dark:bg-blue-700">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Deskripsi Produk</th>
                <th scope="col" class="px-6 py-3">Harga Produk</th>
                <th scope="col" class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody>
    @foreach ($nama as $index => $item)
        <tr class="border-b dark:border-gray-700 border-gray-200 
                   odd:bg-white even:bg-gray-50 
                   dark:odd:bg-gray-800 dark:even:bg-gray-700">
            <td class="px-6 py-4">{{ $index + 1 }}</td>
            <td class="px-6 py-4">{{ $item }}</td>
            <td class="px-6 py-4">{{ $desc[$index] }}</td>
            <td class="px-6 py-4">{{ $harga[$index] }}</td>
        </tr>
    @endforeach
</tbody>

    </table>
</div>
