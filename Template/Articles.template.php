<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 18/01/18
 * Time: 14:34
 */

require './class/Autoloader.php';

session_start();

use App\Articles;
use App\Autoloader;

Autoloader::register();

 $datas = new Articles($title,$content);
 $dataRep = $datas->getArticle();

foreach ($dataRep as $key => $data){
    echo '<div class="container">
            <div class="row">
                <div class="col s9 offset-s1">
                    <h4>'.$data->title.'</h4>
                    <p>'.$data->content.'</p>
                    <p>Publier le '. $data->publishDate .' Par '. $data->login .'</p>
                </div>
            </div>
          </div>';
}