<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>
<body class="bg-slate-900 h-screen flex flex-col">
    <div class="relative flex flex-1">
        <!-- Sidebar -->
        <x-sidebar />

        <div id="main-header" class="flex flex-col flex-1 ml-20">
            <x-header />

            <!-- Conteúdo Principal -->
            <main class="flex-1 p-4">
                <!-- Conteúdo principal aqui -->
            </main>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
</body>
</html>
