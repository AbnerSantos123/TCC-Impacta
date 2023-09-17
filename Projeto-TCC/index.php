<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <title>S7ven Bank</title>
</head>
<body>

<!-- Area de Login - Tela inicial -->
    <main>
        <img src="./imagens/Logo-RMBG-recort.png" alt="Logotipo" class="logo-tela-inicial">

        <form action="" class="formulario-login">
            <input type="text" name="name" id="name" placeholder="Nome de usuário" required>
            <input type="email" name="email" id="email" placeholder="Digite o seu E-mail" required>
            <input type="password" name="psswd" id="psswd" placeholder="Digite a sua Senha" required>
            <button><a href="home.php">Enviar</a></button>
        </form>

        <h3>Você não possui conta? <span><a href="create-account.php">Crie sua conta aqui</a></span></h3>
    </main>
    
</body>
</html>