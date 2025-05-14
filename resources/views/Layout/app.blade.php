<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    {{-- Tailwind CSS & fonts  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>


    {{-- Tambahan favicon dan meta --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="description" content="@yield('meta_description', 'Aplikasi Laravel')">
</head>
{{-- Menu Navigasi --}}
    @include('component.header')

    {{-- Konten Utama --}}
    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            @yield('content')
        </div>
    </main>

</html>
