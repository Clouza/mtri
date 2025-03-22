<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    @vite('resources/css/app.css') <!-- Jika pakai Vite & Tailwind -->
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md bg-white p-6 rounded shadow">
            <h1 class="text-2xl mb-4">Register</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block mb-1">Name</label>
                    <input type="text" name="name" id="name" class="border w-full px-3 py-2" required>
                    @error('name')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-1">Email</label>
                    <input type="email" name="email" id="email" class="border w-full px-3 py-2" required>
                    @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-1">Password</label>
                    <input type="password" name="password" id="password" class="border w-full px-3 py-2" required>
                    @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="border w-full px-3 py-2" required>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    Register
                </button>
            </form>
            <p class="mt-4">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-blue-600">Login</a>
            </p>
        </div>
    </div>
</body>

</html>
