<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 18/01/18
 * Time: 16:44
 */
session_start();
$_SESSION['login'] = '';
$_SESSION['email'] = '';
$_SESSION['age'] = '';
$_SESSION['subscrDate'] = '';

session_destroy();
header('Location: index.php');