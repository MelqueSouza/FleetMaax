<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  @vite('resources/css/app.css')

</head>
<body class="bg-slate-800 grid grid-cols-12 h-screen">
  <picture class="col-span-7">
  <img class="w-full" src="{{ asset('assets/images/banners/bgLogin.png') }}" alt="">
  </picture>

  <div class="col-span-5 w-full flex items-center justify-center">
        <div class="w-full max-w-md rounded-lg shadow-lg">
            <h2 class="text-4xl font-light text-yellow-500 text-center mb-6">Acesse sua conta</h2>

            <form id="loginForm">

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1 text-white">CNPJ</label>
                    <div class="flex items-center border border-orange-400 rounded-lg p-2">
                        <i class="fas fa-file-invoice mr-2 text-white"></i>  
                        <input type="text" id="cnpj" name="cnpj" class="w-full bg-transparent outline-none placeholder-white text-white" placeholder="XX.XXX.XXX/XXXX-XX">
                    </div>
                    <p id="cnpjError" class="text-red-500 text-sm hidden">CNPJ inválido!</p>
                </div>


                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1 text-white">Email</label>
                    <div class="flex items-center border border-orange-400 rounded-lg p-2">
                        <i class="fas fa-envelope mr-2 text-white"></i>
                        <input type="email" id="email" name="email" class="w-full bg-transparent outline-none placeholder-white text-white" placeholder="exemplo@gmail.com">
                    </div>
                    <p id="emailError" class="text-red-500 text-sm hidden">Email inválido!</p>
                </div>

                <!-- Senha -->
            <div class="mb-4 text-white">
                <label class="block text-sm font-medium mb-1">Senha</label>
                <div class="flex items-center border border-orange-400 rounded-lg p-2">
                    <i class="fas fa-key mr-2 text-white"></i>
                    <input type="password" id="password" name="password" class="w-full bg-transparent outline-none placeholder-white text-white" placeholder="********">
                    <button type="button" onclick="togglePassword()" class="ml-2"><i class="fas fa-eye"></i></button>
                </div>
                <p id="passwordError" class="text-red-500 text-sm hidden">A senha deve ter no mínimo 6 caracteres!</p>
            </div>

                <div class="text-right mb-4">
                    <a href="#" class="text-orange-400 text-sm hover:underline">Esqueci minha senha</a>
                </div>

                <button type="submit" class="w-full bg-orange-400 text-gray-900 font-bold py-2 rounded-lg hover:bg-yellow-500 transition">Login</button>
            </form>

            <p class="text-center mt-4 text-sm text-white">Novo na Fleet Max? <a href="#" class="text-orange-400 font-bold hover:underline">Comece aqui!</a></p>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;

            const cnpj = document.getElementById('cnpj').value;
            const cnpjError = document.getElementById('cnpjError');
            if (cnpj.length < 14) {
                cnpjError.classList.remove('hidden');
                isValid = false;
            } else {
                cnpjError.classList.add('hidden');
            }

            const email = document.getElementById('email').value;
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                emailError.classList.remove('hidden');
                isValid = false;
            } else {
                emailError.classList.add('hidden');
            }

            const password = document.getElementById('password').value;
            const passwordError = document.getElementById('passwordError');
            if (password.length < 6) {
                passwordError.classList.remove('hidden');
                isValid = false;
            } else {
                passwordError.classList.add('hidden');
            }

            if (isValid) {
                alert("Login válido! (Aqui entraria a lógica de backend)");
            }
        });

        function togglePassword() {
            const passwordInput = document.getElementById('password');
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }
    </script>

</body>
</html>