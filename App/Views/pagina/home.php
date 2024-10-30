<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha de Perfil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-container">
        <h2>Como você deseja entrar?</h2>
        
        <form action="escolha_perfil.php" method="POST">
            <button type="submit" name="perfil" value="artista" class="button button-artist">Artista</button>
            <button type="submit" name="perfil" value="apreciador" class="button button-appreciator">Apreciador</button>
        </form>

        <div class="register-link">
            <form action="cadastro.php" method="GET">
                <button type="submit" class="button button-register">Cadastre-se</button>
            </form>
            <p>Já possui uma conta? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>
