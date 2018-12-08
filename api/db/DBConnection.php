<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 10:19 PM
 */

class DBConnection
{

    private $host="127.0.0.1";
    private $userName="root";
    private $password="1234";
    private $database="Cataring";
    private $port="3306";

    private $connection;

    /**
     * DBConnection constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->host,$this->userName,$this->password,$this->database,$this->port);
    }

    public function getDBConnection(){
        return $this->connection;
    }
}