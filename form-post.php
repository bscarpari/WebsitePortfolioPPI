<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icons/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./css/table.css"/>
    <script src="https://kit.fontawesome.com/b383934f35.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Dados: Planos (via POST)</title>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'dark'; ?>">
    <nav class="top-nav">
        <header>
            <a class="logo" href="#"><img src="./assets/icons/logo.png" alt="logo"></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./contato.php">Contato</a></li>
                    <li><a href="./planos.php">Planos</a></li>
                </ul>
            </nav>
            <div class="switch-theme">
                <label class="switch">
                    <input type="checkbox" checked id="switch">
                    <span class="slider round"></span>
                </label>
            </div>
            <p class="menu"><i class="fas fa-caret-down"></i></p>
        </header>
        <aside class="overlay">
            <a class="close">&times;</a>
            <div class="content">
                <a href="./index.php">Home</a>
                <a href="./contato.php">Contato</a>
                <a href="./planos.php">Plano</a>
                <div class="switch-theme-mob">
                    <label class="switch">
                        <input type="checkbox" checked id="switch">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </aside>
    </nav>
    <div class="body">
        <main class="div-align">
            <table class="table">
                <?php
                if (isset($_POST['submit'])) {
                    $nome = $_POST["nome"];
                    $email = $_POST["email"];
                    $assunto = $_POST['assunto'];
                    $servicos = $_POST['servicos'];
                    $orçamento = $_POST['orcamento'];
                    $comentario = $_POST['comentario'];

                    foreach ($assunto as $value) {
                        $assunto = $value;
                    }
                    echo "<tr><th>Nome do cliente</th><th>E-mail</th><th>Assunto</th><th>Tipo de serviço</th><th>Orçamento inicial</th></tr>";
                    echo "<tr><td>$nome</td><td>$email</td><td>$assunto</td><td>$servicos</td><td>$orçamento</td></tr>";
                    echo "<tr><th>Comentário</th><td colspan=4>$comentario</td></tr>";
                }
                ?>
            </table>
        </main>
    </div>
    <footer class="footer">
        <div class="social-icons">
            <a href="https://github.com/bscarpari" target="_blank"><i class="fab fa-github" target="_blank"></i></a>
            <a href="https://www.linkedin.com/in/brunoscarpari/" target="_blank"><i class="fab fa-linkedin-in"
                    target="_blank"></i></a>
            <a href="https://www.instagram.com/b.scarpari/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
    <script src="./js/menu.js"></script>
    <script src="./js/switch-theme.js"></script>
</body>
</html>