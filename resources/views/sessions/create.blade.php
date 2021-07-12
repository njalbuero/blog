<x-layout>
    <div class="w-full max-w-lg mx-auto mt-12">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/login" method="POST">
            @csrf
            <h5 class="text-2xl font-bold mb-5">Log In</h5>
            @error('login')
                <p class="mt-2 text-xs text-red-500 mb-2">{{ $message }}</p>
            @enderror
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="******************" name="password">
                @error('password')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>
