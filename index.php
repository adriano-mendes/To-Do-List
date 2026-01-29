
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">

        <form action="">
            <h1>Entrar na plataforma</h1>
            <div class="input-container">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <img width="22" height="22" src="https://img.icons8.com/windows/32/000000/user.png" alt="user"/>
            </div>
            <div class="input-container">
                <input type="password" name="password" id="password" placeholder="Senha" required>
                <img width="20" height="20" src="https://img.icons8.com/ios/50/000000/lock--v1.png" alt="lock--v1"/>
                <a href="#">Esqueci minha senha</a>
            </div>

            <button type="submit" class="submit">Entrar</button>

            <div class="register">
                <p>Não está cadastrado?<a href="signup.html"> Cadastrar</a></p>
            </div>
        </form>

    </div>
</body>
</html>