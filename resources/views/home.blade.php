<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  @vite('resources/css/app.css')
</head>
<body class="bg-slate-900 h-screen flex flex-col ">

    <div class="relative flex flex-1">
        <!-- Sidebar -->
        <aside class="absolute top-0 left-0 bottom-0 w-20 bg-yellow-500 flex flex-col items-center justify-items-center">

          <img class="w-14 py-3" src="{{ asset('assets/images/logoSideBar.svg') }}" alt="">

          <nav class="mt-24">
            <ul class="flex items-center justify-items-center text-3xl text-gray-800 flex-col gap-6">
              <li><i class="fas fa-home"></i></li>
              <li><i class="fas fa-file-alt"></i></li>
              <li><i class="fas fa-truck"></i></li>
              <li><i class="fas fa-route"></i></li>
              <li><i class="fas fa-folder"></i></li>
              <li><i class="fas fa-user"></i></li>
            </ul>
          </nav>
        </aside>

        <div class="flex flex-col flex-1 ml-20">
            <!-- Header -->
            <header class="relative bg-white h-12 w-full flex items-center justify-between p-2.5 shadow-lg">
              <a class="flex items-center gap-1.5 p-2 transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-red-500" href="">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <p>Sair</p>
              </a>
            
              <div class="flex items-center gap-3">
                  <div class="bg-gray-300 shadow-md rounded flex items-center flex-wrap gap-3 p-1">
                    <p>CNPJ: 08.377.004/0001-00</p>
                    <p>LYSI TECH</p>
                  </div>
                <img class="" src="{{ asset('assets/images/logoHeader.svg') }}" alt="">
              </div>
            </header>

            <!-- Conteúdo Principal -->
            <main class="flex-1 p-4">
                <!-- Conteúdo principal aqui -->
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-yellow-500 w-full p-5">

      <div class="grid grid-cols-4 justify-items-center gap-4 text-slate-900">
          <div class="p-4">
            <img src="{{ asset('assets/images/logoFooter.png') }}" alt="">
          </div>

          <div class="p-4">

            <h1 class="inline-block text-xl font-medium relative mb-4">
              Gestão de Frota
              <span class="absolute inset-x-0 mx-auto left-0 -bottom-0.5 w-full h-0.5 bg-white"></span>
            </h1>

            <ul class="grid gap-2">
              <a class="transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-purple-900 hover:underline decoration-purple-900" href="#">
                <li>DashBoard</li>
              </a>
              <a class="transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-purple-900 hover:underline decoration-purple-900" href="#">
                <li>Relatórios</li>
              </a>
            </ul>
            
          </div>
          <div class=" p-4">
            <h1 class="inline-block text-xl font-medium relative mb-4">
              Veículos e motorista
              <span class="absolute inset-x-0 mx-auto left-0 -bottom-0.5 w-full h-0.5 bg-white"></span>
            </h1>

            <ul class="grid gap-2">
              <a class="transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-purple-900 hover:underline decoration-purple-900" href="#">
                <li>Caminhões</li>
              </a>
              <a class="transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-purple-900 hover:underline decoration-purple-900" href="#">
                <li>Motoristas</li>
              </a>
              <a class="transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-purple-900 hover:underline decoration-purple-900" href="#">
                <li>Rotas</li>
              </a>
            </ul>
          </div>

          <div class="p-4">
            <h1 class="inline-block text-xl font-medium relative mb-4">
              Suporte e contato
              <span class="absolute inset-x-0 mx-auto left-0 -bottom-0.5 w-full h-0.5 bg-white"></span>
            </h1>

            <ul class="grid gap-2">
              <a class="transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-purple-900 hover:underline decoration-purple-900" href="#">
                <li>FAQ</li>
              </a>
              <a class="transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-purple-900 hover:underline decoration-purple-900" href="#">
                <li>Termos de Uso</li>
              </a>
              <a class="transition-all duration-300 ease-in-out hover:translate-x-1 hover:text-purple-900 hover:underline decoration-purple-900" href="#">
                <li>Política de Privacidade</li>
              </a>
              <a class=" hover:text-slate-900 transition-all duration-300 ease-in-out hover:translate-x-1 text-purple-900 hover:underline" href="#">
                <li>suporte@fleetmax.com</li>
              </a>
            </ul>
          </div>

          </div>

      <div class="text-right text-slate-900 mt-4 p-4">
        <p>FleetMax © Alguns direitos reservados. 2025</p>
      </div>
    </footer>
  
</body>
</html>