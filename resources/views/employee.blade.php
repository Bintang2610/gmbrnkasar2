<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 h-full">
        <div class="min-h-full">
            <x-navbar></x-navbar>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-2">
                    <a href="/admin" class="flex py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                    </svg>
                    </a>
                            <a href="/add-employee" class="flex py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 bg-yellow-200 hover:bg-yellow-400 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg>
                            </a>
                </div>

                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                    <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Foto</th>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Jabatan</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Status Aktif</th>
                            <th scope="col" class="px-6 py-3">Store Incharge</th>
                            <th scope="col" class="px-6 py-3">Area Store</th>
                            <th scope="col" class="px-6 py-3">NIK</th>
                            <th scope="col" class="px-6 py-3">Alamat</th>
                            <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                            <th scope="col" class="px-6 py-3">Nomor HP</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="cursor-pointer bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 border-gray-200" onclick="window.location=this.querySelector('a').href;">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ asset('images/foto.jpeg') }}" class="h-24 w-24 object-contain" />
                                </th>
                                <td class="px-6 py-4">
                                    <a href="/profil-employee">Alex Kumala</a>
                                </td>
                                <td class="px-6 py-4">Karyawan</td>
                                <td class="px-6 py-4">---</td>
                                <td class="px-6 py-4">Aktif</td>
                                <td class="px-6 py-4">---</td>
                                <td class="px-6 py-4">Sukabumi</td>
                                <td class="px-6 py-4">220330002242</td>
                                <td class="px-6 py-4">Jonggol, Sukabumi</td>
                                <td class="px-6 py-4">Pria</td>
                                <td class="px-6 py-4">098767788</td>
                            </tr>
                            <tr class="cursor-pointer bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 border-gray-200" onclick="window.location=this.querySelector('a').href;">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ asset('images/foto.jpeg') }}" class="h-24 w-24 object-contain" />
                                </th>
                                <td class="px-6 py-4">
                                    <a href="/profil-employee">Alex Kumala</a>
                                </td>
                                <td class="px-6 py-4">Karyawan</td>
                                <td class="px-6 py-4">---</td>
                                <td class="px-6 py-4">Aktif</td>
                                <td class="px-6 py-4">---</td>
                                <td class="px-6 py-4">Sukabumi</td>
                                <td class="px-6 py-4">220330002242</td>
                                <td class="px-6 py-4">Jonggol, Sukabumi</td>
                                <td class="px-6 py-4">Pria</td>
                                <td class="px-6 py-4">098767788</td>
                            </tr>
                            <tr class="cursor-pointer bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 border-gray-200" onclick="window.location=this.querySelector('a').href;">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ asset('images/foto.jpeg') }}" class="h-24 w-24 object-contain" />
                                </th>
                                <td class="px-6 py-4">
                                    <a href="/profil-employee">Alex Kumala</a>
                                </td>
                                <td class="px-6 py-4">Karyawan</td>
                                <td class="px-6 py-4">---</td>
                                <td class="px-6 py-4">Aktif</td>
                                <td class="px-6 py-4">---</td>
                                <td class="px-6 py-4">Sukabumi</td>
                                <td class="px-6 py-4">220330002242</td>
                                <td class="px-6 py-4">Jonggol, Sukabumi</td>
                                <td class="px-6 py-4">Pria</td>
                                <td class="px-6 py-4">098767788</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
            </div>
            </main>
        </div>
    </body>
</html>