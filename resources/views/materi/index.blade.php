<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pertanyaan Kejang Demam</title>
    @vite('resources/css/app.css') <!-- Bila pakai Vite & Tailwind -->
    <style>
        /* Modal hidden by default */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4); /* background overlay */
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="p-4 bg-white shadow flex justify-between">
        <h1 class="text-xl font-bold">Aplikasi Kejang Demam (Q&A)</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                Logout
            </button>
        </form>
    </nav>

    <div class="max-w-4xl mx-auto mt-6">
        <!-- Pencarian -->
        <form action="{{ route('materi.index') }}" method="GET" class="mb-4">
            <div class="flex">
                <input
                    type="text"
                    name="search"
                    placeholder="Cari pertanyaan..."
                    value="{{ $search ?? '' }}"
                    class="border border-gray-300 rounded-l px-3 py-2 w-full"
                >
                <button class="bg-blue-600 text-white px-4 py-2 rounded-r">
                    Cari
                </button>
            </div>
        </form>

        @if ($materis->count() > 0)
            <ul class="bg-white rounded shadow divide-y divide-gray-200">
                @foreach ($materis as $materi)
                    <li class="p-4 hover:bg-gray-50 cursor-pointer"
                        onclick="openModal('{{ $materi->pertanyaan }}', '{{ str_replace(["\r\n", "\r", "\n"], '\\n', $materi->jawaban) }}')">
                        {{ $materi->pertanyaan }}
                    </li>
                @endforeach
            </ul>
        @else
            <div class="bg-white p-4 rounded shadow">
                <p class="text-gray-500">Pertanyaan tidak ditemukan</p>
            </div>
        @endif
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal flex items-center justify-center">
        <div class="bg-white w-full max-w-md p-6 rounded shadow relative">
            <button
                class="absolute top-2 right-2 text-gray-600 hover:cursor-pointer"
                onclick="closeModal()">
                ✕
            </button>
            <h2 id="modalQuestion" class="text-lg font-semibold mb-2"></h2>
            <p id="modalAnswer" class="text-gray-700"></p>
        </div>
    </div>

    <script>
        const modal      = document.getElementById('myModal');
        const modalQ     = document.getElementById('modalQuestion');
        const modalA     = document.getElementById('modalAnswer');

        function openModal(question, answer) {
            modalQ.textContent = question;
            modalA.textContent = answer.replace(/\\n/g, '<br>');
            modal.style.display = 'flex'; // Tampilkan modal
        }

        function closeModal() {
            modal.style.display = 'none'; // Sembunyikan modal
        }

        // Jika user klik di luar box konten, tutup modal
        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>
</body>
</html>
