<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/6/18
 * Time: 12:09 AM
 */

require_once __DIR__."/../core/OrderDetails.php";

interface OrderDetailsBuness
{
    public function addOrderDetails(OrderDetails $orderDetails): bool ;
    public function deleteOrderDetails(string $id): bool ;
    public function serchOrderDetails(string $id): array ;
    public function updateOrderDetails(OrderDetails $orderDetails):bool ;
    public function getAllOrderDetails():array ;
}