<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/icons/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/page3.css" />
    <script src="https://kit.fontawesome.com/b383934f35.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Bruno Scarpari - Contato</title>
</head>
<body class="<?php echo isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'dark'; ?>">
    <nav class="top-nav">
        <header>
            <a class="logo" href="./index.php"><img src="./assets/icons/logo.png" alt="logo"></a>
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
    <main class="div-align">
        <section class="form-section">
            <div class="title">
                <h1>PLANOS</h1>
                <i class="fas fa-chevron-down"></i></h1>
            </div>
            <form action="./form-post.php" method="POST" class="form-wrapper">
                <div class="input-group">
                    <label class="title">Informações essenciais</label>
                    <input type="text" name="nome" placeholder="Nome e Sobrenome" required/>
                    <input type="email" name="email" placeholder="E-mail" required/>
                </div>
                <div class="input-group">
                    <label class="title">Assunto</label><br>
                    <div class="checkbox">
                        <label class="container">Web Design
                            <input type="checkbox" value="Web Design" name="assunto[]" id="campo1"/>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Desenvolvimento web
                            <input type="checkbox" value="Desenvolvimento Web" name="assunto[]" id="campo2"/>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Social Media Design
                            <input type="checkbox" value="Social Media Design" name="assunto[]" id="campo3"/>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="input-group">
                    <div class="align">
                        <div class="details">
                            <label class="title">Tipo de serviço</label><br>
                            <select class="appearance-select" name="servicos">
                                <option value="">Selecione</option>
                                <option value="Landing page">Landing page</option>
                                <option value="One page">One page</option>
                                <option value="Site dinâmico">Site dinâmico</option>
                                <option value="Blog">Blog</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                    </div>
                    <div class="details">
                        <label class="title">Orçamento estimado</label><br>
                        <input type="number" name="orcamento" min="100" max="10000" placeholder="A partir de R$100" required>
                    </div>
                </div>
                <div class="input-group">
                    <label class="title">Mensagem</label>
                    <textarea id="textarea" name="comentario" rows="4" cols="50" required></textarea>
                    <button type="submit" class="btn" name="submit">Contatar</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer">
        <div class="social-icons">
            <a href="https://github.com/bscarpari" target="_blank"><i class="fab fa-github" target="_blank"></i></a>
            <a href="https://www.linkedin.com/in/brunoscarpari/" target="_blank"><i class="fab fa-linkedin-in"
                    target="_blank"></i></a>
            <a href="https://www.instagram.com/b.scarpari/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
    <script src="./js/menu.js"></script>
    <script src="js/switch-theme.js"></script>
</body>
</html>