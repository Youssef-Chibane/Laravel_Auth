<x-layout>
    <div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center px-4">
        <h1 class="text-center font-bold text-4xl mb-10 mt-20 text-gray-800">
            Welcome <span class="text-red-500">{{ Auth::user()->name }}</span> to the private dashboard
        </h1>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit"
                class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-200">
                Logout
            </button>
        </form>
    </div>
</x-layout>