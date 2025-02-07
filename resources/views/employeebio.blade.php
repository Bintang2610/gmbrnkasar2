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
                        <a href="/list-employee" class="flex py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                        </svg>
                        </a> 
                            <a href="/edit-employee" class="flex py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 bg-yellow-200 hover:bg-yellow-400 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
                            </a>
                    </div>

                    <div class="p-6 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                        <div class="grid grid-cols-4 gap-4">
                            <div class="flex flex-col items-center justify-center h-80 rounded-sm bg-gray-50 dark:bg-gray-800 p-4">
                                <img src="{{ asset('images/foto.jpeg') }}" class="h-44 w-44 rounded-full object-contain mb-4" />
                                <div class="flex flex-col items-center bg-gray-100 rounded-lg w-full p-4">
                                    <p class="font-semibold text-md">Nama :</p>
                                    <p class="text-md">Alex Kumala</p>
                                </div>
                            </div>
                                <div class="flex col-span-3 h-92 rounded-sm bg-gray-50 dark:bg-gray-800 p-4">
                                    <div class="grid grid-flow-col grid-rows-3 gap-4 w-full h-full">
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Jabatan :</p>
                                            <p class="text-md">Karyawan</p>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Status :</p>
                                            <p class="text-md">---</p>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Status Aktif :</p>
                                            <p class="text-md">Aktif</p>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Store Incharge :</p>
                                            <p class="text-md">---</p>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Area Store :</p>
                                            <p class="text-md">Sukabumi</p>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">NIK :</p>
                                            <p class="text-md">220330002242</p>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Alamat :</p>
                                            <p class="text-md">Jonggol, Sukabumi</p>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Jenis Kelamin :</p>
                                            <p class="text-md">Pria</p>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Nomor HP :</p>
                                            <p class="text-md">098767788</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </body>
    </html>