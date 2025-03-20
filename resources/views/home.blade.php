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
<body class="h-screen bg-slate-900 ">

  <div class="flex justify-between items-center p-4">
    <img id="" class="" src="{{ asset('assets/images/logoHome.png') }}" alt="">
    <a class="text-yellow-500 underline" href="#">Acesse sua conta</a>
  </div>

  <picture class="grid items-center justify-items-center w-full p-8">
    <img id="" class="" src="{{ asset('assets/images/bgLandingPage.svg') }}" alt="">
  </picture>

    <div class="grid items-center justify-items-center">
      <button class="bg-yellow-500 py-4 px-6 rounded-4xl font-bold mb-6">
        Faça seu cadastro  aqui
      </button>
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