<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 17/01/18
 * Time: 14:29
 */

class Users{
    private $id;
    private $login;
    private $password;
    private $email;
    private $age;
    private $subscrDate;

    public function __construct($login, $password, $email, $age)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->age = $age;
        $this->subscrDate = date('Y-m-d H:i:s');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return false|string
     */
    public function getSubscrDate()
    {
        return $this->subscrDate;
    }

    /**
     * @param false|string $subscrDate
     */
    public function setSubscrDate($subscrDate)
    {
        $this->subscrDate = $subscrDate;
    }


}