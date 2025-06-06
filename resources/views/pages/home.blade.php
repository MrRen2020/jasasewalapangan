@extends('Layout.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
<h1 class="text-2x1 font-bold mb-4">Selamat Pagi</h1>
<p class="mb-4">Berikut adalah berita update di hari ini</p>

@include('components.card', [
    'img' => 'images/gonggong.jpg',
    'title' => 'Gonggong goreng Tepung mak limah',
    'desc' => 'Kuliner unik satu ini wajib dicoba untuk menguji ketahanan gigi.' 
])
@endsection