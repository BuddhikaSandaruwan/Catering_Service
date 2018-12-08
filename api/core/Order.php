<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 10:11 PM
 */

class Order
{

    private $oId;
    private $onDate;
    private $offDate;
    private $deliveryAdress;
    private $otherTP;
    private $totalPrice;
    private $custID;

    /**
     * Order constructor.
     * @param $oId
     * @param $onDate
     * @param $offDate
     * @param $deliveryAdress
     * @param $otherTP
     * @param $totalPrice
     * @param $custID
     */
    public function __construct($oId, $onDate, $offDate, $deliveryAdress, $otherTP, $totalPrice, $custID)
    {
        $this->oId = $oId;
        $this->onDate = $onDate;
        $this->offDate = $offDate;
        $this->deliveryAdress = $deliveryAdress;
        $this->otherTP = $otherTP;
        $this->totalPrice = $totalPrice;
        $this->custID = $custID;
    }

    /**
     * @return mixed
     */
    public function getOId()
    {
        return $this->oId;
    }

    /**
     * @param mixed $oId
     */
    public function setOId($oId)
    {
        $this->oId = $oId;
    }

    /**
     * @return mixed
     */
    public function getOnDate()
    {
        return $this->onDate;
    }

    /**
     * @param mixed $onDate
     */
    public function setOnDate($onDate)
    {
        $this->onDate = $onDate;
    }

    /**
     * @return mixed
     */
    public function getOffDate()
    {
        return $this->offDate;
    }

    /**
     * @param mixed $offDate
     */
    public function setOffDate($offDate)
    {
        $this->offDate = $offDate;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAdress()
    {
        return $this->deliveryAdress;
    }

    /**
     * @param mixed $deliveryAdress
     */
    public function setDeliveryAdress($deliveryAdress)
    {
        $this->deliveryAdress = $deliveryAdress;
    }

    /**
     * @return mixed
     */
    public function getOtherTP()
    {
        return $this->otherTP;
    }

    /**
     * @param mixed $otherTP
     */
    public function setOtherTP($otherTP)
    {
        $this->otherTP = $otherTP;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return mixed
     */
    public function getCustID()
    {
        return $this->custID;
    }

    /**
     * @param mixed $custID
     */
    public function setCustID($custID)
    {
        $this->custID = $custID;
    }



}