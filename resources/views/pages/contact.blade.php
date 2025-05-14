@extends('layout.app')

@section('title', 'Beranda')

@section('content')
<div class="container mx-auto px-4">
    <div class="max-w-md mx-auto">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gray-200 px-6 py-4 font-semibold text-lg">
                Kontak Kami
            </div>
            <div class="p-6 space-y-4">
                <div class="flex">
                    <div class="w-1/3 font-medium">Nama Rental</div>
                    <div class="w-2/3">CarBooks</div>
                </div>
                <div class="flex">
                    <div class="w-1/3 font-medium">Telp</div>
                    <div class="w-2/3">08121231414</div>
                </div>
                <div class="flex">
                    <div class="w-1/3 font-medium">Alamat</div>
                    <div class="w-2/3">Batu aji</div>
                </div>
                <div class="flex">
                    <div class="w-1/3 font-medium">Email</div>
                    <div class="w-2/3">Carbooks@gmail.com</div>
                </div>
                <div class="flex">
                    <div class="w-1/3 font-medium">No Rekening</div>
                    <div class="w-2/3">331245243</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

