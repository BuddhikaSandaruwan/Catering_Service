<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 11:11 PM
 */

require_once __DIR__."/../business/impl/OrderBusinessImpl.php";
require_once __DIR__."/../core/Order.php";


$orderBo=new OrderBusinessImpl();
$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];
switch ($mothod) {
    case "GET":
        echo json_encode($orderBo->getAllOrder());
        break;
    case "POST":
//        $OId = $_POST["username"];
        $onDate = $_POST['onDate'];
        $offDate = $_POST["offDate"];
        $deliveryAdress = $_POST['deliveryAdress'];
        $otherTp = $_POST['otherTp'];
        $totalPrice = $_POST['totalPrice'];
        $custID = $_POST['custId'];




        $tempOrder = new Order(0,$onDate,$offDate,$deliveryAdress,$otherTp,$totalPrice,$custID);
        $resp = $orderBo->addOrder($tempOrder);
        echo $resp;
        break;

}