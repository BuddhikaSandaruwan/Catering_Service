<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 9:49 PM
 */

class Customer
{
    private $nic;
    private $name;
    private $adress;
    private $tp;
    private $userName;
    private $password;

    /**
     * Customer constructor.
     * @param $nic
     * @param $name
     * @param $adress
     * @param $tp
     * @param $userName
     * @param $password
     */
    public function __construct($nic, $name, $adress, $tp, $userName, $password)
    {
        $this->nic = $nic;
        $this->name = $name;
        $this->adress = $adress;
        $this->tp = $tp;
        $this->userName = $userName;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * @param mixed $nic
     */
    public function setNic($nic)
    {
        $this->nic = $nic;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * @param mixed $tp
     */
    public function setTp($tp)
    {
        $this->tp = $tp;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
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



}