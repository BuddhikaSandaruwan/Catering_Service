<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 10:16 PM
 */

class OrderDetails
{

    private $oID;
    private $iID;
    private $qty;

    /**
     * OrderDetails constructor.
     * @param $oID
     * @param $iID
     * @param $qty
     */
    public function __construct($oID, $iID, $qty)
    {
        $this->oID = $oID;
        $this->iID = $iID;
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getOID()
    {
        return $this->oID;
    }

    /**
     * @param mixed $oID
     */
    public function setOID($oID): void
    {
        $this->oID = $oID;
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
    public function setIID($iID): void
    {
        $this->iID = $iID;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty): void
    {
        $this->qty = $qty;
    }


}