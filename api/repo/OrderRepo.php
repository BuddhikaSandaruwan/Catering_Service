<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/5/18
 * Time: 10:02 PM
 */
require_once __DIR__."/../core/Order.php";
interface OrderRepo
{
    public function setConnection(mysqli $connection): void;

    public function addOrder(Order $order): bool ;

    public function getAllOrder(): array ;
}