<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 18/01/18
 * Time: 15:43
 */

namespace App;

session_start();

class SignIn extends Users{
    private $login;
    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }



    public function authUser(){
        $bdd = new BDDconnect('blog');
        $data = $bdd->query('SELECT * FROM users WHERE login="'.$this->getLogin().'"');
        return $data;
    }
}