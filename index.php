<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icons/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/page1.css"/>
    <script src="https://kit.fontawesome.com/b383934f35.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Bruno Scarpari - Dev</title>
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
                    <span class="slider round" id="switch"></span>
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
                        <span class="slider round" id="switch"></span>
                    </label>
                </div>
            </div>
        </aside>
    </nav>
    <main class="div-align">
        <section id="about">
            <div class="content">
                <span id="profile"><img src="./assets/profile.jpg" alt=""></span>
                <h1><strong>Bruno Scarpari</strong>, 17 anos.</h1>
                <h2>
                    Atualmente cursando como <strong>Técnico em Informática</strong> em IFSul - Campus Gravataí. Amante
                    de
                    de design web e tecnologia. Procuro trazer sinergia entre um <strong>design limpo</strong> e
                    <strong>atrativo</strong> em conjunto com o desenvolvimento de sites <strong> sites diretos
                    </strong>e<strong> de qualidade.</strong>
                </h2>
                <div class="buttons">
                    <a href="https://drive.google.com/file/d/1332m0-2DVluzhS0wf6yLt_11XvWIjRaP/view?usp=sharing"
                        target="_blank">CURRÍCULO</a>
                </div>
            </div>
        </section>
        <div id="projects">
            <div class="title">
                <h1>Meus projetos</h1><i class="fas fa-chevron-down"></i>
            </div>
            <div id="items-wrapper">
                <div id="items">
                    <div class="item">
                        <img src="https://unsplash.it/1600/400?image=950" />
                        <h2>Projeto</h2>
                    </div>
                    <div class="item">
                        <img src="https://unsplash.it/1600/400?image=950" />
                        <h2>Projeto</h2>
                    </div>
                    <div class="item">
                        <img src="https://unsplash.it/1600/400?image=950" />
                        <h2>Projeto</h2>
                    </div>
                    <div class="item">
                        <img src="https://unsplash.it/1600/400?image=950" />
                        <h2>Projeto</h2>
                    </div>
                </div>
            </div>
            <div class="subtitle">
                <a href="planos.php"><i class="fas fa-arrow-right"></i><h2>Contrate-me</h2></a>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="social-icons">
            <a href="https://github.com/bscarpari" target="_blank"><i class="fab fa-github" target="_blank"></i></a>
            <a href="https://www.linkedin.com/in/brunoscarpari/" target="_blank"><i class="fab fa-linkedin-in"
                    target="_blank"></i></a>
            <a href="https://www.instagram.com/b.scarpari/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/switch-theme.js"></script>
</body>
</html>