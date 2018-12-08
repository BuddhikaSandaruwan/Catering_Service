<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/6/18
 * Time: 12:28 AM
 */

require_once __DIR__."/../OrderDetailsRepo.php";
require_once __DIR__."/../../core/OrderDetails.php";

class OrderDetailsRepoImpl implements OrderDetailsRepo
{

    private $connection;

    /**
     * OrderDetailsRepoImpl constructor.
     */
    public function __construct()
    {
        $connection=(new DBConnection())->getDBConnection();
        $this->connection = $connection;
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addOrderDetails(OrderDetails $orderDetails): bool
    {
        $resp=$this->connection->query(
            "INSERT INTO orderDetails VALUES(
                '{$orderDetails->getOID()}',
                '{$orderDetails->getOID()}',
                '{$orderDetails->getQty()}')");
        if($resp){
            echo "OrderDetails Add..!";
        }else{
            echo "OrderDetails Not Add..! ",mysqli_error($this->connection);
        }

        return $resp;
    }

    public function deleteOrderDetails(string $id): bool
    {
        // TODO: Implement deleteOrderDetails() method.
    }

    public function searchOrderDetails(string $id): array
    {
        // TODO: Implement searchOrderDetails() method.
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