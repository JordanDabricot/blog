<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 18/01/18
 * Time: 09:53
 */

require 'BDDconnect.php';
require 'Users.php';

class Register extends Users {

    public function __construct($login, $password, $email, $age)
    {
        parent::__construct($login, $password, $email, $age);
    }

    public function register(){
        $bdd = new BDDconnect('blog');
        $conn = $bdd->getPDO();
        $conn->exec('INSERT INTO users SET login="'.$this->getLogin().'", password="'.$this->getPassword().'", email="'.$this->getEmail().'", age="'.$this->getAge().'", subscrDate=NOW()');
    }
}