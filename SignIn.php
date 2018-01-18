

<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 18/01/18
 * Time: 15:35
 */
require 'header.php';
require 'SignInController.php';
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="row">
                    <div class="row">
                        <form class="col s12" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="login" id="login" type="text" class="validate">
                                    <label for="login">Login</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" name="password" type="password" class="validate">
                                    <label for="password">Mot de passe</label>
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
    if(isset($_POST['login']) && isset($_POST['password'])){
        $login = $_POST['login'];
        $password = sha1($_POST['password']);
        $bdd = new SignInController($login, $password);
        $data = $bdd->authUser();
        if($data[0]->login == $login && $data[0]->password == $password){
            $_SESSION['login'] = $data[0]->login;
            $_SESSION['email'] = $data[0]->email;
            $_SESSION['age'] = $data[0]->age;
            $_SESSION['subscrDate'] = $data[0]->subscrDate;
            header('Location: index.php');
        }else{
            echo 'c\'est mort';
        }
    }
}
