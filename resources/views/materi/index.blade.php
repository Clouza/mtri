<!DOCTYPE html>
<html>
<head>
    <title>Chat Materi Kejang Demam</title>
    @vite('resources/css/app.css') <!-- Jika menggunakan Vite & Tailwind -->
</head>
<body class="bg-gray-100">
    <nav class="p-4 bg-white shadow flex justify-between items-center">
        <div>
            <h1 class="text-xl font-bold">Aplikasi Materi</h1>
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

    <div class="max-w-2xl mx-auto mt-6 bg-white p-4 rounded shadow">
        <!-- Container Chat -->
        <div class="space-y-4">
            <!-- Jika user sudah menuliskan sesuatu (search tidak kosong), tampilkan chat dari "user" -->
            @if(!empty($search))
                <!-- Chat bubble dari user -->
                <div class="flex justify-end">
                    <div class="bg-blue-500 text-white p-3 rounded-lg max-w-xs">
                        <!-- Tampilkan teks user -->
                        {{ $search }}
                    </div>
                </div>

                <!-- Chat bubble dari "Bot" -->
                <div class="flex justify-start">
                    <div class="bg-gray-200 p-3 rounded-lg max-w-xs">
                        @if(count($materis) > 0)
                            <!-- Jika ada materi ditemukan -->
                            <p class="font-semibold mb-2">Bot:</p>
                            <p>Berikut materi yang Anda minta:</p>
                            <ul class="list-disc list-inside">
                                @foreach($materis as $materi)
                                    <li>
                                        <a href="{{ $materi->pdf_url }}" target="_blank" class="text-blue-600 hover:underline">
                                            {{ $materi->judul }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <!-- Jika tidak ditemukan -->
                            <p class="font-semibold mb-2">Bot:</p>
                            <p>Maaf, materi tidak ditemukan.</p>
                        @endif
                    </div>
                </div>
            @else
                <!-- Jika belum ada input pencarian, tampilkan bubble "Bot" default -->
                <div class="flex justify-start">
                    <div class="bg-gray-200 p-3 rounded-lg max-w-xs">
                        <p class="font-semibold mb-2">Bot:</p>
                        <p>Halo! Silakan ketik materi yang ingin Anda cari.</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Form input "chat" -->
        <form action="{{ route('materi.index') }}" method="GET" class="mt-4">
            <div class="flex">
                <input
                    type="text"
                    name="search"
                    placeholder="Contoh: Panduan Kejang Demam..."
                    value=""
                    class="border border-gray-300 px-3 py-2 w-full rounded-l focus:outline-none"
                >
                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-r"
                >
                    Kirim
                </button>
            </div>
        </form>
    </div>
</body>
</html>
