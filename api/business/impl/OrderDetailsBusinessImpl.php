<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/6/18
 * Time: 12:13 AM
 */

require_once __DIR__."/../OrderDetailsBuness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/OrderDetails.php";
require_once __DIR__."/../../repo/impl/OrderDetailsRepoImpl.php";

class OrderDetailsBusinessImpl implements OrderDetailsBuness
{

    public function addOrderDetails(OrderDetails $orderDetails): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $orderReopo = new OrderDetailsRepoImpl();
        $orderReopo->setConnection($connection);

        return $orderReopo->addOrderDetails($orderDetails);

    }

    public function deleteOrderDetails(string $id): bool
    {
        // TODO: Implement deleteOrderDetails() method.
    }

    public function serchOrderDetails(string $id): array
    {
        // TODO: Implement serchOrderDetails() method.
    }

    public function updateOrderDetails(OrderDetails $orderDetails): bool
    {
        // TODO: Implement updateOrderDetails() method.
    }

    public function getAllOrderDetails(): array
    {
        // TODO: Implement getAllOrderDetails() method.
    }
}