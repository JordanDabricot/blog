<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 17/01/18
 * Time: 14:27
 */

require 'class/Users.php';
require 'class/Articles.php';
require 'class/Comments.php';
require 'class/BDDconnect.php';

$bdd = new BDDconnect('blog');
$a = $bdd->getPDO();
$a->exec('INSERT INTO articles SET title="TEST 2", content="Test paeerrrer", publishDate=NOW()');
$datas = $bdd->query('SELECT * from articles');
$ab = 35;
echo "votre age est de :". $ab ;

//foreach ($datas as $key => $data) {
  //  $key => $data;
//}