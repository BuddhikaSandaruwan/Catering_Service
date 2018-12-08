<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 9:56 PM
 */

class Item
{
    private $iID;
    private $name;
    private $discription;
    private $dailyRental;

    /**
     * Item constructor.
     * @param $iID
     * @param $name
     * @param $discription
     * @param $dailyRental
     */
    public function __construct($iID, $name, $discription, $dailyRental)
    {
        $this->iID = $iID;
        $this->name = $name;
        $this->discription = $discription;
        $this->dailyRental = $dailyRental;
    }

    /**
     * @return mixed
     */
    public function getIID()
    {
        return $this->iID;
    }

    /**
     * @param mixed $iID
     */
    public function setIID($iID)
    {
        $this->iID = $iID;
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
    public function getDiscription()
    {
        return $this->discription;
    }

    /**
     * @param mixed $discription
     */
    public function setDiscription($discription)
    {
        $this->discription = $discription;
    }

    /**
     * @return mixed
     */
    public function getDailyRental()
    {
        return $this->dailyRental;
    }

    /**
     * @param mixed $dailyRental
     */
    public function setDailyRental($dailyRental)
    {
        $this->dailyRental = $dailyRental;
    }



}