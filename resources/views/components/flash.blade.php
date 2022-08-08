@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="fixed px-4 py-2 text-sm text-white bg-gray-700 bottom-3 right-3 rounded-xl">
        <p>{{ session('success') }}</p>
    </div>
@endif