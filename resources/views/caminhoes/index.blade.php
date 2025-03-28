<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caminhões</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>





<body class="bg-slate-900 h-screen flex flex-col">

    <button class="bg-yellow-500 hover:bg-yellow-700 text-slate-800 font-bold py-2 px-4 border border-yellow-700 rounded">
        Novo Caminhão +
    </button>


    <!-- Novo Caminhão -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-700/80 hidden z-50">
        <div class="bg-gray-200 mx-6 my-10 w-1/2 h-[85%]">
            <div class="flex justify-between m-6">
                <h1 class="text-yellow-500 text-5xl">Novo Caminhão</h1>
                <img src="{{ asset('assets/images/logoModal.png') }}" alt="Logo" class="h-18">
            </div>

            <div class="py-4">
                <form action="" method="post">
                    <div class="space-y-4 mx-6">
                        <div>
                            <label for="implemento" class="py-2 text-xl">Implemento</label>
                            <input type="text" name="implemento" id="implemento" placeholder="Implemento" class="px-4 py-1 w-full border rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="marca_modelo" class="py-2 text-xl">Marca/Modelo</label>
                            <input type="text" name="marca_modelo" id="marca_modelo" placeholder="Marca/Modelo" class="px-4 py-1 w-full border rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="ano" class="py-2 text-xl">Ano</label>
                            <input type="text" name="ano" id="ano" placeholder="Ano" class="px-4 py-1 w-full border rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="numero_chassi" class="py-2 text-xl">Número de Chassi</label>
                            <input type="text" name="numero_chassi" id="numero_chassi" placeholder="Número de Chassi" class="px-4 py-1 w-full border rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="placa" class="py-2 text-xl">Placa</label>
                            <input type="text" name="placa" id="placa" placeholder="Placa" class="px-4 py-1 w-full border rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="cor" class="py-2 text-xl">Cor</label>
                            <input type="text" name="cor" id="cor" placeholder="Cor" class="px-4 py-1 w-full border rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="nome_motorista" class="py-2 text-xl">Nome do Motorista</label>
                            <input type="text" name="nome_motorista" id="nome_motorista" placeholder="Nome do Motorista" class="px-4 py-1 w-full border rounded-lg text-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>
                    </div>

                    <div class="flex justify-end py-16 mx-6">
                        <button type="submit" class="bg-yellow-500 text-xl rounded-full w-60 py-3 px-4 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">Novo Caminhão</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />


    <script>
        // Obter elementos do formulario e do botão
        const modal = document.getElementById('modal');
        const btnNovaRota = document.querySelector('button.bg-yellow-500'); // O botão "Novo Caminhão"

        // Função para abrir o formulario
        btnNovaRota.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        // Fechar o formulario clicando fora da área
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>

</body>



</html>