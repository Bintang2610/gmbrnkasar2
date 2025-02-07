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
                <div class="flex items-start mb-2">
                    <a href="/profil-employee" class="inline-flex w-auto py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-green rounded-full border border-gray-200 bg-green-400 hover:bg-green-200 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-242.7c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32L64 32zm0 96c0-17.7 14.3-32 32-32l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 224c-17.7 0-32-14.3-32-32l0-64zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                        </svg>
                    </a>  
                </div>


                    <div class="p-6 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                        <div class="grid grid-cols-4 gap-4">
                            <div class="flex flex-col items-center justify-center h-80 rounded-sm bg-gray-50 dark:bg-gray-800 p-4">
                                <img src="{{ asset('images/foto.jpeg') }}" class="h-44 w-44 rounded-full object-contain mb-4" />
                                <div class="flex flex-col items-center bg-gray-100 rounded-lg w-full p-4">
                                    <p class="font-semibold text-md">Nama :</p>
                                    <input class="text-md" value="Alex Kumala"></input>
                                </div>
                            </div>
                                <div class="flex col-span-3 h-92 rounded-sm bg-gray-50 dark:bg-gray-800 p-4">
                                    <div class="grid grid-flow-col grid-rows-3 gap-4 w-full h-full">
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Jabatan :</p>
                                            <input class="text-md" value="Karyawan"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Status :</p>
                                            <input class="text-md" value="---"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Status Aktif :</p>
                                            <input class="text-md" value="Aktif"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Store Incharge :</p>
                                            <input class="text-md" value="---"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Area Store :</p>
                                            <input class="text-md" value="Sukabumi"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">NIK :</p>
                                            <input class="text-md" value="220330002242"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Alamat :</p>
                                            <input class="text-md" value="Jonggol, Sukabumi"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Jenis Kelamin :</p>
                                            <input class="text-md" value="Pria"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Nomor HP :</p>
                                            <input class="text-md" value="098767788"></input>
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