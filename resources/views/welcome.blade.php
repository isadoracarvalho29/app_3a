<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro, Login e Recuperação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
        .link {
            text-align: center;
            display: block;
            margin-top: 10px;
        }
        .link a {
            color: #007BFF;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Tela de Login -->
    <div class="container" id="login">
        <h2>Login</h2>
        <form action="login-process.php" method="POST">
            <label for="email-login">E-mail</label>
            <input type="email" id="email-login" name="email" required>
            
            <label for="password-login">Senha</label>
            <input type="password" id="password-login" name="password" required>
            
            <button type="submit">Entrar</button>
        </form>
        <div class="link">
            <a href="javascript:void(0);" onclick="toggleForms('recuperacao')">Esqueceu sua senha?</a><br>
            <a href="javascript:void(0);" onclick="toggleForms('cadastro')">Criar uma conta</a>
        </div>
    </div>

    <!-- Tela de Cadastro -->
    <div class="container" id="cadastro" style="display:none;">
        <h2>Criar Conta</h2>
        <form action="cadastro-process.php" method="POST">
            <label for="name-cadastro">Nome Completo</label>
            <input type="text" id="name-cadastro" name="name" required>
            
            <label for="email-cadastro">E-mail</label>
            <input type="email" id="email-cadastro" name="email" required>
            
            <label for="password-cadastro">Senha</label>
            <input type="password" id="password-cadastro" name="password" required>
            
            <label for="password-confirm-cadastro">Confirmar Senha</label>
            <input type="password" id="password-confirm-cadastro" name="confirm-password" required>
            
            <button type="submit">Cadastrar</button>
        </form>
        <div class="link">
            <a href="javascript:void(0);" onclick="toggleForms('login')">Já tem uma conta? Faça Login</a>
        </div>
    </div>

    <!-- Tela de Recuperação de Senha -->
    <div class="container" id="recuperacao" style="display:none;">
        <h2>Recuperar Senha</h2>
        <form action="recuperacao-process.php" method="POST">
            <label for="email-recuperacao">E-mail</label>
            <input type="email" id="email-recuperacao" name="email" required>
            
            <button type="submit">Recuperar Senha</button>
        </form>
        <div class="link">
            <a href="javascript:void(0);" onclick="toggleForms('login')">Voltar para o Login</a>
        </div>
    </div>

    <script>
        function toggleForms(formId) {
            // Esconde todas as telas
            document.getElementById('login').style.display = 'none';
            document.getElementById('cadastro').style.display = 'none';
            document.getElementById('recuperacao').style.display = 'none';
            
            // Exibe o formulário escolhido
            document.getElementById(formId).style.display = 'block';
        }
    </script>
    
</body>
</html>