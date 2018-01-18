<?php
session_start();

function sessionExiste(){
    if($_SESSION['login']){
        echo '<li><a href="#">'.ucfirst($_SESSION['login']).'</a></li>
              <li><a href="PublishTemplate.php">Publier</a></li>
              <li><a href="Deconnect.php">Déconnexion</a></li>';
    }else{
        echo '<li><a href="RegisterTemplate.php">Inscription</a></li>
              <li><a href="SignIn.php">Se Connecter</a></li>';
    }
}
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper grey darken-1">
                <a href="index.php" class="brand-logo">BLOG</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php sessionExiste();?>
                </ul>
            </div>
        </nav>
    </body>
</html>

