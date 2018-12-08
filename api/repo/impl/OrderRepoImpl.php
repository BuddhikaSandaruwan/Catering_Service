<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/5/18
 * Time: 10:03 PM
 */

require_once __DIR__."/../OrderRepo.php";
require_once __DIR__."/../../core/Order.php";


class OrderRepoImpl implements OrderRepo
{

    private $connection;

    /**
     * OrderRepoImpl constructor.
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

    public function addOrder(Order $order): bool
    {
//        $resp=$this->connection->query(
//            "insert into webOrder values('{$order->getOId()}',
//                '{$order->getCustID()}',
//                '{$order->getOnDate()}',
//                '{$order->getOffDate()}',
//                '{$order->getDeliveryAdress()}',
//                '{$order->getOtherTP()}',
//                '{$order->getTotalPrice()}')");
//        if($resp){
//            echo "Order Add..!";
//        }else{
//            echo mysqli_error($resp);
//        }


if (!$this->connection){
    echo mysqli_connect_error();
}else{
    $result=mysqli_query($this->connection,"insert into webOrder values(
                '{$order->getOId()}',
                '{$order->getCustID()}',
                '{$order->getOnDate()}',
                '{$order->getOffDate()}',
                '{$order->getDeliveryAdress()}',
                '{$order->getOtherTP()}',
                '{$order->getTotalPrice()}')");
    if($result){
        echo "Order Add";
    }else{
        echo "Order Add Fails -->",mysqli_error($this->connection);
    }
}

        return $result;
    }

    public function getAllOrder(): array
    {
        $resultSet=$this->connection->query("select oId from webOrder order by oId desc limit 1");
        return $resultSet->fetch_all();
    }
}