<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 19/01/18
 * Time: 10:33
 */

namespace App;
session_start();

class UserAdmin extends Users {

    public function __construct($login, $password, $email, $age)
    {
        parent::__construct($login, $password, $email, $age);
    }


    public function getUser(){
        $data = new BDDconnect('blog');
        $user = $data->query('SELECT * FROM users WHERE login="'. $_SESSION['login'] .'"');
        return $user;
    }

    public function updateUser(){
        $data = new BDDconnect('blog');
        $updateData = $data->getPDO();
        $updateData->query('UPDATE users SET login="'. $this->getLogin() . '", password ="'. $this->getPassword() .'", age="'. $this->getAge() .'", email="'. $this->getEmail() .'" WHERE id_user="'. $_SESSION['id'] .'"');
    }

    public function getArticle(){
        $data = new BDDconnect('blog');
        $dataArticle = $data->query('SELECT * FROM articles INNER JOIN users ON users.id_user = articles.user_id WHERE users.id_user="'. $_SESSION['id'] .'"');
        return $dataArticle;
    }

    public function deleteArticle($key){
        $data = new BDDconnect('blog');
        $datas = $data->getPDO();
        $datas->exec('DELETE FROM articles WHERE id_article="'. $key . '"');
    }
}