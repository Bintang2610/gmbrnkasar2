<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 h-full">
        <div class="min-h-full">
        <main>
            <div class="flex items-center justify-center h-screen w-screen">
            <div class="flex flex-col items-center justify-center w-80">  
                <p class="text-2xl font-bold mb-2 text-center">Welcome!</p>  

                <div class="grid w-full">  
                    <!-- Tombol Absen dengan lebar penuh -->
                    <a href="/absen" class="mb-2 p-4 w-full bg-white hover:bg-gray-200 text-gray-800 font-semibold py-2 rounded shadow text-center">
                        Absen
                    </a>  

                    <div class="grid grid-cols-2 gap-2 w-full">  
                        <!-- Tombol Login dan Register juga penuh -->
                        <a href="/login" class="w-full bg-white hover:bg-gray-200 text-gray-800 font-semibold py-2 rounded shadow text-center">
                            Login
                        </a>  
                        <a href="/register" class="w-full bg-white hover:bg-gray-200 text-gray-800 font-semibold py-2 rounded shadow text-center">
                            Register
                        </a>  
                    </div>  
                </div>  
            </div>
        </div>
        </main>
        </div>
    </body>
</html>
