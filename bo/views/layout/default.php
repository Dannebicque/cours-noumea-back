<html>
<head>
    <meta charset="UTF-8"/>
    <title>Tuto MVC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/main.css"/>
</head>
<body>
<header class="jumbotron text-center" style="margin-bottom:0">
    <h1>Bienvenue sur mon blog</h1>
</header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/">Navigation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/articles">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/humour">Humour</a>
            </li>
            <?php
            if ($user === null):
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">S'inscrire</a>
                </li>
            <?php
            else:
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login/deconnexion">Bonjour <?= $user; ?>, se déconnecter</a>
                </li>
            <?php
            endif;
            ?>
        </ul>
    </div>
</nav>
<main class="container">
    <?php
    if ($erreur !== null):
        ?>
        <div class="alert alert-danger mt-2 mb-2" role="alert">
            <strong>Erreur ! </strong>
            <?= $erreur; ?>
        </div>
    <?php
    endif;
    ?>
    <?= $content ?>
</main>
<footer class="jumbotron text-center" style="margin-bottom:0">
    <p>Copyright 2022</p>
</footer>
</body>
</html>
