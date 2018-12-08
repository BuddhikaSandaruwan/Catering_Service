<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/6/18
 * Time: 12:21 AM
 */

require_once __DIR__."/../core/OrderDetails.php";

interface OrderDetailsRepo
{
    public function setConnection(mysqli $connection): void;

    public function addOrderDetails(OrderDetails $orderDetails): bool ;

    public function deleteOrderDetails(string $id): bool ;

    public function searchOrderDetails(string $id): array ;

    public function updateOrderDetails(OrderDetails $orderDetails): bool ;

    public function getAllOrderDetails(): array ;
}