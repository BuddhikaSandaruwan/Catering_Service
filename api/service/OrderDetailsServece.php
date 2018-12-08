<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 11:11 PM
 */

require_once __DIR__."/../business/impl/OrderDetailsBusinessImpl.php";
require_once __DIR__."/../core/OrderDetails.php";


$orderDetais=new OrderDetailsBusinessImpl();
//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];
switch ($mothod) {
    case "GET":
        echo json_encode($itemBO->getAllItem());
        break;
    case "POST":
        $orderID = $_POST['myID'];
        $qty = $_POST["firstname"];
        $item = $_POST['country'];


        $tempOrderDetails = new OrderDetails($orderID,$item,$qty);
        $resp = $orderDetais->addOrderDetails($tempOrderDetails);
        echo $resp;
        break;
}