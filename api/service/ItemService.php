<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 11:11 PM
 */

require_once __DIR__."/../business/impl/ItemBusinessImpl.php";
require_once __DIR__."/../core/Item.php";


$itemBO=new ItemBusinessImpl();
//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];
switch ($mothod) {
    case "GET":
        echo json_encode($itemBO->getAllItem());
        break;
    case "POST":
        $onDate = $_POST['Iid'];
        $offDate = $_POST["Iname"];
        $deliveryAdress = $_POST['Discription'];
        $otherTp = $_POST['dailyRental'];

        $tempItem = new Item($onDate,$offDate,$deliveryAdress,$otherTp);
        $resp = $itemBO->addItem($tempItem);
        echo $resp;
        break;
}