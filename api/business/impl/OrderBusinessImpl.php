<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/5/18
 * Time: 10:01 PM
 */


require_once __DIR__."/../OrderBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Order.php";
require_once __DIR__."/../../repo/impl/OrderRepoImpl.php";

class OrderBusinessImpl implements OrderBusiness
{

    public function addOrder(Order $order): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $orderRepo = new OrderRepoImpl();
        $orderRepo->setConnection($connection);

        return $orderRepo->addOrder($order);
        return true;
    }

    public function getAllOrder(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $orderRepo=new OrderRepoImpl();
        $orderRepo->setConnection($connection);
        return $orderRepo->getAllOrder();
    }
}