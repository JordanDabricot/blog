<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 19/01/18
 * Time: 10:41
 */

session_start();

require 'header.template.php';
require '../class/Autoloader.php';

use App\UserAdmin;
use App\Autoloader;

Autoloader::register();
?>
<div class="container">
    <div class="row">
        <div class="col s9 offset-s2">
            <h3>Modification Information Compte</h3>
            <div class="container">
                <div class="row">
                    <div class="col s10">
                        <div class="row">
                            <form class="col s12" method="post">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="login" id="login" type="text" class="validate">
                                        <label for="login">Nouveau Login</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" name="password" type="password" class="validate">
                                        <label for="password"> Nouveau Mot de passe</label>
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
                                        <button class="btn waves-effect waves-light" type="submit" name="submit">Valider
                                            <i class="fa fa-pencil-square-o material-icons right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$datas = new UserAdmin($_SESSION['login'], $_SESSION['password'], $_SESSION['age'], $_SESSION['email']);
$datas->setLogin($_SESSION['login']);
$datas->setPassword($_SESSION['password']);
$datas->setAge($_SESSION['age']);
$datas->setEmail($_SESSION['email']);
if (isset($_POST['submit'])){
    if(isset($_POST['login']) && !empty($_POST['login'])){
        $datas->setLogin($_POST['login']);
        $datas->updateUser();
        $_SESSION['login'] = $_POST['login'];
        echo 'Login modifier';
        header("refresh:5;url=UserAdmin.template.php");
    }
    else if(isset($_POST['password']) && !empty($_POST['password'])){
        $datas->setPassword(sha1($_POST['password']));
        $datas->updateUser();
        $_SESSION['password'] = $datas->getPassword();
        echo 'Login modifier';
        header("refresh:5;url=UserAdmin.template.php");
    }
    else if(isset($_POST['age']) && !empty($_POST['age'])){
        $datas->setAge($_POST['age']);
        $datas->updateUser();
        $_SESSION['age'] = $_POST['age'];
        echo 'Login modifier';
        header("refresh:5;url=UserAdmin.template.php");
    }
    else if(isset($_POST['email']) && !empty($_POST['email'])){
        $datas->setEmail($_POST['email']);
        $datas->updateUser();
        $_SESSION['email'] = $_POST['email'];
        echo 'Login modifier';
        header("refresh:5;url=UserAdmin.template.php");
    }else{
        echo 'Les champs ne sont pas remplis';
    }
}
?>