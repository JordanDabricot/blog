<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 18/01/18
 * Time: 14:34
 */

require 'BDDconnect.php';


$datas = new BDDconnect('blog');
$datas = $datas->query('SELECT * FROM articles ORDER BY publishDate DESC ');

foreach ($datas as $key => $data){
    echo '<div class="container">
            <div class="row">
                <div class="col s5 offset-s2">
                    <h4>'.$data->title.'</h4>
                    <p>'.$data->content.'</p>
                    <p>Publier le '.$data->publishDate.'</p>
                </div>
            </div>
          </div>';
}