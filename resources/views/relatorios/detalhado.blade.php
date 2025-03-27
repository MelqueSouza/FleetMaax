<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório Detalhado</title>
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

        <!-- titulo com detalhe do lado -->
        <div class="flex items-center space-x-3 bg-gray-900 p-4 rounded-lg">
          <span class="w-1 h-12 bg-gradient-to-b from-yellow-500 to-emerald-300"></span>
          <h1 class="text-white text-5xl">Relatório Detalhado</h1>
        </div>

        <!-- Container do Relatório -->
        <div class="bg-white p-6 my-10 shadow-lg max-w-full">
          <!-- Formulário de Informações -->
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="text-2xl">Motorista:</label>
              <input type="text" class="border border-gray-400 rounded w-full px-2 py-1" placeholder="Nome do motorista">
            </div>
            <div>
              <label class="text-2xl">Rota:</label>
              <input type="text" class="border border-gray-400 rounded w-full px-2 py-1" placeholder="Ex: 145">
            </div>
            <div>
              <label class="text-2xl">Veículo:</label>
              <input type="text" class="border border-gray-400 rounded w-full px-2 py-1" placeholder="Modelo do veículo">
            </div>
            <div>
              <label class="text-2xl">Origem:</label>
              <input type="text" class="border border-gray-400 rounded w-full px-2 py-1" placeholder="Cidade-Estado / Av./Rua">
            </div>
            <div>
              <label class="text-2xl">Nº Veículo:</label>
              <input type="text" class="border border-gray-400 rounded w-full px-2 py-1" placeholder="Número de identificação do veículo">
            </div>
            <div>
              <label class="text-2xl">Destino:</label>
              <input type="text" class="border border-gray-400 rounded w-full px-2 py-1" placeholder="Cidade-Estado / Av./Rua">
            </div>

            <!-- Feito apenas para manter o proximo item do lado direito -->
            <div>
              <span class="w-full px-2 py-1">
            </div>

            <!-- Horário de Saída e Chegada -->
            <div class="flex mt-4 gap-4">
              <label class="text-2xl">Saída</label>
              <input type="time" class="border border-gray-400 rounded px-2 py-1 w-24 mr-10">

              <label class="text-2xl">Chegada</label>
              <input type="time" class="border border-gray-400 rounded px-2 py-1 w-24">
            </div>

          </div>

          <!-- Inspeção -->
          <div class="mt-4">
            <label class="resize-none text-2xl font-semibold" for="descricaoViagem">Inspeção:</label>
            <textarea rows="4" maxlength="1000" placeholder="Ex: Defeito no sistema de arrefecimento ou pneu furado." class="border border-gray-400 rounded w-full p-2 resize-none" name="descricaoViagem" id="descricaoViagem"></textarea>
          </div>

          <!-- Botão Gerar PDF -->
          <div class="flex justify-end mt-6">
            <button class="bg-yellow-500 text-slate-900 font-bold py-2 px-4 rounded-4xl flex items-center gap-2 hover:bg-yellow-600 transition cursor-pointer duration-150 ease-in-out transform active:scale-95">
              <span>Gerar PDF</span>
              <i class="fas fa-file-pdf"></i>
            </button>
          </div>
        </div>


      </main>
    </div>
  </div>

  <!-- Footer -->
  <x-footer />
</body>

</html>