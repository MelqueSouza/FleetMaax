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
        <!-- Título com detalhe do lado -->
        <div class="flex items-center space-x-3 bg-gray-900 p-4 rounded-lg">
          <span class="w-1 h-12 bg-gradient-to-b from-yellow-500 to-emerald-300"></span>
          <h1 class="text-white text-5xl">Informação do Motorista</h1>
        </div>

        <!-- Retângulo branco com informações do motorista -->
        <div class="bg-white p-6 mt-6 rounded-lg shadow-md w-[1800px]">
          <div class="flex justify-between items-start">
            
        
          <!-- Foto e nome do motorista -->    
    <div class="flex items-center space-x-4">
        <h2 class="text-3xl font-semibold">MANOEL FRANCISCO</h2>
   </div>

  <!-- Atribuições -->
  <div class="flex flex-col">
    <h3 class="text-slate-500 text-sm font-semibold text-right">
      ATRIBUIÇÕES
    </h3>

    <!-- Botões -->
    <div class="mt-2 flex flex-col space-y-2">
      <button class="bg-yellow-500 hover:bg-yellow-600 text-slate-800 px-4 py-2 rounded flex items-center space-x-2">
        <i class="fas fa-route"></i>
        <span>Atribuir rota</span>
      </button>
      <button class="bg-yellow-500 hover:bg-yellow-600 text-slate-800 px-4 py-2 rounded flex items-center space-x-2">
        <i class="fas fa-truck"></i>
        <span>Atribuir veículo</span>
        </button>
            </div>
        </div>
    </div>
          <!-- Informações do motorista -->
          <div class="-mt-7.5 text-gray-700">
            <p><strong>ID:</strong> #1010</p>
            <p><strong>Telefone:</strong> (88) 9.1234-5678</p>
            <p><strong>E-mail:</strong> manoelfrancisco10@gmail.com</p>
            <p><strong>Caminhão:</strong> Carreta 2 eixos</p>
            <p><strong>Admissão:</strong> 27/01/2017</p>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Footer -->
  <x-footer />
</body>

</html>
