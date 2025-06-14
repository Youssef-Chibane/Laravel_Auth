<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form method="POST" action="{{ route('login-attempt') }}"
            class="bg-white p-6 rounded-xl shadow-md w-full max-w-sm space-y-4">
            @csrf

            <h2 class="text-2xl font-semibold text-center">Login</h2>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" placeholder="you@example.com"
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-400">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••"
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-400">
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                Submit
            </button>
        </form>
    </div>
</x-layout>