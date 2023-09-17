<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <title>S7ven Bank</title>
</head>
<body>

    <main>
        <img src="./imagens/Logo-RMBG-recort.png" alt="Logotipo" class="logo-tela-create-account">

        <form action="./model/cadastro.php" class="formulario-login" method="POST">
            <input type="text" name="name" id="name" placeholder="Nome de usuário" required>

            <input type="email" name="email" id="email" placeholder="Digite o seu E-mail" required>

            <input type="password" name="senha" id="psswd" placeholder="Digite a sua Senha" required>
            <button type="submit">Confirmar</button>
        </form>
    </main>
    
</body>
</html>