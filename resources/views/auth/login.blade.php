<x-layout>
    <div class="min-h-screen flex items-center justify-center">
        <section class=" px-6 py-8 max-w-lg w-full">
            <main class="w-full p-6 mx-auto  bg-gray-100 border border-gray-200 rounded-xl">
                <h1 class="text-xl font-bold text-center">Log In</h1>

                <form method="POST" action="/login" class="py-4">
                    @csrf
                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-xs font-bold text-gray-700 uppercase">
                            Email
                        </label>

                        <input class="w-full p-2 border border-gray-400" type="email" name="email" id="email"
                            value="{{ old('email') }}" required>

                        @error('email')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-xs font-bold text-gray-700 uppercase">
                            Password
                        </label>

                        <input class="w-full p-2 border border-gray-400" type="password" name="password" id="password"
                            required>

                        @error('password')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-end ">
                        <button type="submit" class="px-4 py-2 mr-4 text-white bg-primary rounded hover:bg-primary/95">
                            Log In
                        </button>
                        <a href="/login/google" class="px-4 py-2 text-white bg-primary rounded hover:bg-primary/95">
                            Google
                        </a>
                    </div>

                </form>

            </main>
        </section>
    </div>

</x-layout>
