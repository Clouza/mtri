<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md bg-white p-6 rounded shadow">
            <h1 class="text-2xl mb-4">Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block mb-1">Email</label>
                    <input type="email" name="email" id="email" class="border w-full px-3 py-2">
                    @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-1">Password</label>
                    <input type="password" name="password" id="password" class="border w-full px-3 py-2">
                    @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Remember Me -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    Login
                </button>
            </form>
            <p class="mt-4">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-blue-600">Register</a>
            </p>
        </div>
    </div>
</body>

</html>
