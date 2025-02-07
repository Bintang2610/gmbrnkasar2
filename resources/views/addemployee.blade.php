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
                    <a href="/list-employee" class="inline-flex w-auto py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-green rounded-full border border-gray-200 bg-green-400 hover:bg-green-200 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-242.7c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32L64 32zm0 96c0-17.7 14.3-32 32-32l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 224c-17.7 0-32-14.3-32-32l0-64zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                        </svg>
                    </a>  
                    <a href="/list-employee" class="inline-flex w-auto py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-green rounded-full border border-gray-200 bg-white hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
                    </a>  
                </div>
                    <div class="p-6 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                        <div class="grid grid-cols-4 gap-4">
                            <div class="flex flex-col items-center justify-center h-80 rounded-sm bg-gray-50 dark:bg-gray-800 p-4">
                            <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input
                                    type="file"
                                    accept="image/png, image/jpeg, image/jpg"
                                    name="image"
                                    class="hidden"
                                    id="fileInput"
                                    onchange="displayImage(this)"
                                />
                                
                                <label for="fileInput" class="relative w-44 h-44 border-2 border-gray-300 rounded-full flex items-center justify-center bg-gray-100 cursor-pointer overflow-hidden group mb-4">
                                    <!-- Div untuk background image dan teks -->
                                    <div id="selectedImage" class="w-full h-full bg-gray-100 flex items-center justify-center transition duration-300 group-hover:bg-black group-hover:bg-opacity-50">
                                        <span id="uploadText" class="text-sm font-semibold text-gray-600 group-hover:text-white">Upload Image</span>
                                    </div>
                                </label>
                            </form>
                                    <div class="flex flex-col items-center bg-gray-100 rounded-lg w-full p-4">
                                    <p class="font-semibold text-md">Nama :</p>
                                    <p class="text-md">Alex Kumala</p>
                                </div>
                            </div>
                                <div class="flex col-span-3 h-92 rounded-sm bg-gray-50 dark:bg-gray-800 p-4">
                                    <div class="grid grid-flow-col grid-rows-3 gap-4 w-full h-full">
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Jabatan :</p>
                                            <input class="text-md"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Status :</p>
                                            <input class="text-md"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Status Aktif :</p>
                                            <input class="text-md"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Store Incharge :</p>
                                            <input class="text-md"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Area Store :</p>
                                            <input class="text-md"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">NIK :</p>
                                            <input class="text-md"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Alamat :</p>
                                            <input class="text-md"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Jenis Kelamin :</p>
                                            <input class="text-md"></input>
                                        </div>
                                        <div class="flex flex-col items-left justify-center bg-gray-100 rounded-lg h-full w-full rounded-sm p-4">
                                            <p class="font-semibold text-md">Nomor HP :</p>
                                            <input class="text-md"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
    // Fungsi untuk menampilkan gambar yang dipilih
    function displayImage(input) {
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            // Mengubah warna latar belakang menjadi gambar yang dipilih
            document.getElementById('selectedImage').style.backgroundImage = 'url(' + e.target.result + ')';
            document.getElementById('selectedImage').style.backgroundSize = 'cover';
            document.getElementById('selectedImage').style.backgroundPosition = 'center';
            // Menyembunyikan teks "Upload Image"
            document.getElementById('uploadText').style.display = 'none';
        }

        // Membaca file yang dipilih
        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
                </main>
            </div>
        </body>
    </html>