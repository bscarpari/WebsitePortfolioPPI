<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include_once './login-register.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icons/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/page0.css" />
    <title>Bruno Scarpari - Registre-se</title>
</head>
<body>
    <main class="div-align">
        <section class="form-section">
            <img src="./assets/icons/logo.png" alt="logo">
            <h1>Registre-se agora</h1>
            <div class="form-wrapper">
                <form action="./login-register.php" method="POST">
                    <div class="input-block">
                        <input type="email" name="email" placeholder="E-mail" required/>
                    </div>
                    <div class="input-block">
                        <input type="password" name="senha" placeholder="Senha" required/>
                    </div>
                    <button type="submit" name="submit" class="btn">Registrar-se</button>
                </form>
            </div>
        </section>
    </main>
    <img src="./assets/icons/wave.svg" alt="" id="wave">
    <script src="js/switch-theme.js"></script>
</body>
</html>