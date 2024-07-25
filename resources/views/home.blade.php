<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="container bg-gray-50 mt-20 dark:bg-gray-700 rounded-lg shadow-md  mx-auto px-6 py-8">
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di Starlink</h1>
            <p class="text-lg mb-6">Nikmati koneksi internet cepat dan stabil di mana saja.</p>
            <a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Daftar Sekarang</a>
        </div>
        <div class="p-6 mt-8">
            <h2 class="text-2xl font-bold mb-4">Fitur Kami</h2>
            <ul class="list-disc list-inside">
                <li>Kecepatan internet tinggi</li>
                <li>Jangkauan luas</li>
                <li>Harga terjangkau</li>
            </ul>
        </div>
    </div>
</x-guest-layout>