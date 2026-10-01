<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css"></link>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js untuk toggle dropdown & mobile menu interaktif -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
    <div class="min-h-full" x-data="{ mobileMenuOpen: false, userMenuOpen: false }">
        <!-- Navigation Bar (Dark) -->
        <x-navbar></x-navbar>

        <!-- Page Header -->
        <x-header>
           {{ $title }}
        </x-header>

        <!-- Main Content Area -->
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Placeholder Box -->
               {{ $slot }}
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>
</html> 