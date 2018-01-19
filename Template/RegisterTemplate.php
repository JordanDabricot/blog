<?php
require 'header.template.php';

require '../class/Autoloader.php';


use App\Register;
use App\Autoloader;
Autoloader::register();
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="row">
                    <div class="row">
                        <form class="col s12" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input name="login" id="login" type="text" class="validate">
                                    <label for="login">Login</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="password" name="password" type="password" class="validate">
                                    <label for="password">Mot de passe</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="age" name="age" type="number" class="validate">
                                    <label for="age">Age</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="email" id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php

if (isset($_POST['submit'])){
    if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['age']) && !empty($_POST['email'])){
        $login = $_POST['login'];
        $password = sha1($_POST['password']);
        $age = $_POST['age'];
        $email = $_POST['email'];
        $addUser = new Register($login, $password, $email, $age);
        $addUser->register();
        echo '<div class="row">
                <div class="input-field col s12">
                    <p>Compte enregistrer</p>
                </div>
              </div>';
        header("refresh:5;url=SignIn.template.php");
    }else{
        echo 'les champs ne sont pas remplis';
    }
}
?>