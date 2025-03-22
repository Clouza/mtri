<!DOCTYPE html>
<html>

<head>
    <title>Daftar Materi</title>
    @vite('resources/css/app.css') <!-- Jika menggunakan Vite untuk Tailwind -->
</head>

<body class="bg-gray-100">
    <nav class="p-4 bg-white shadow flex justify-between">
        <div>
            <h1 class="text-xl font-bold">Aplikasi Kejang Demam</h1>
        </div>
        <div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto mt-6">
        <form action="{{ route('materi.index') }}" method="GET" class="mb-4">
            <div class="flex">
                <input
                    type="text"
                    name="search"
                    placeholder="Cari materi..."
                    value="{{ $search ?? '' }}"
                    class="border border-gray-300 rounded-l px-3 py-2 w-full">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-r">
                    Cari
                </button>
            </div>
        </form>

        @if ($materis->count() > 0)
        <ul class="bg-white rounded shadow divide-y divide-gray-200">
            @foreach ($materis as $materi)
            <li class="p-4 hover:bg-gray-50">
                <!-- Klik judul => route('materi.show', $materi->id) => langsung redirect ke PDF -->
                <a href="{{ route('materi.show', $materi->id) }}" class="text-blue-600">
                    {{ $materi->judul }}
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <div class="bg-white p-4 rounded shadow">
            <p class="text-gray-500">Materi tidak ditemukan</p>
        </div>
        @endif
    </div>
</body>

</html>
