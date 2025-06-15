<x-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 space-y-6">
        <h1 class="font-bold text-4xl text-gray-800">Hello from Welcome Page</h1>

        <div class="space-x-4">
            @auth
                <a href="{{ route('dashboard') }}"
                    class="inline-block px-6 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="inline-block px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                    Login
                </a>
                <a href="{{ route('register') }}"
                    class="inline-block px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                    Register
                </a>
            @endauth
        </div>
    </div>
</x-layout>