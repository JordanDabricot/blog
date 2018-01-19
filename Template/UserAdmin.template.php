<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 19/01/18
 * Time: 10:41
 */

session_start();

require 'header.template.php';
require  '../class/Autoloader.php';

session_start();
use App\UserAdmin;
use App\Autoloader;
Autoloader::register();

$datas = new UserAdmin($_SESSION['login'], $_SESSION['password'], $_SESSION['email'], $_SESSION['age']);
$data = $datas->getUser();
$dataArticles = $datas->getArticle();
foreach ($data as $key => $value){
    echo '<div class="container">
            <div class="row">
                <div class="col s9 offset-s4">
                    <h3>'. ucfirst($value->login) .'</h3>
                    <p>Email : '. $value->email .'</p>
                    <p>Âge : '. $value->age .' ans</p>
                    <p>Date d\'inscription : '. $value->subscrDate . '</p>
                    <a href="ModifUser.template.php">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Modifier
                            <i class="fa fa-pencil-square-o material-icons right" aria-hidden="true"></i>
                        </button>
                    </a>
                </div>
            </div>';
}
?>
    <h3>Mes Publications</h3>
<?php
if(count($dataArticles) === 0){
    echo 'Vous n\'avez pas encore de publication';
}else {
    foreach ($dataArticles as $value) {
        echo '<div class="row">
                <div class="col s9 offset-s2">
                    <p><b>' . $value->title . '</b></p>
                    <p>' . $value->content . '</p>
                    <p>Publier le ' . $value->publishDate . '</p>
                    <form method="post">
                        <button class="btn waves-effect waves-light" type="submit" name="delete" value="' . $value->id_article . '">Supprimer
                            <i class="fa fa-trash material-icons right" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
              </div>';
    }
}

if (isset($_POST['delete'])){
    $datas->deleteArticle($_POST['delete']);
    echo 'Article supprimer';
    header("Refresh:0");
}
