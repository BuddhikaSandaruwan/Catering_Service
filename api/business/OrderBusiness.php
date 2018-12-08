<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/5/18
 * Time: 9:58 PM
 */

require_once __DIR__."/../core/Order.php";

interface OrderBusiness
{
    public function addOrder(Order $order): bool ;

    public function getAllOrder():array ;
}