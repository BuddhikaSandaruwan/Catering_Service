<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 11:11 PM
 */

require_once __DIR__."/../business/impl/CustomerBusinessImpl.php";
require_once __DIR__."/../core/Customer.php";


$customerBO=new CustomerBusinessImpl();
$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];
switch ($mothod) {
    case "GET":
        echo json_encode($customerBO->getAllCustomer());
        break;
    case "POST":
 $userName = $_POST["username"];
 $eMail = $_POST['email'];
 $password = $_POST["password"];
 $password2 = $_POST['password2'];
 $cusNic = $_POST['CustomerNIC'];
 $cusName = $_POST['CustomerName'];
 $adress = $_POST['Adress'];
 $tp = $_POST['TP'];
//$conection=mysqli_connect("localhost","root","1234","Cataring","3306");
//if (!$conection){
//    echo mysqli_connect_error();
//}else{
//    $result=mysqli_query($conection,"insert into Customer values('$cusNic','$cusName','$adress','$tp','$userName','$password')");
//    if($result){
//        echo "Customer Registrtion Suuceffuly";
//    }else{
//        echo "Customer Added Fails",mysqli_error($conection);
//    }
//}




//        switch ($operation) {
//            case "add":
                $tempCustomer = new Customer($cusNic,$cusName,$adress,$tp,$userName,$password);
                $resp = $customerBO->addCustomer($tempCustomer);
                echo $resp;
                break;
//            case "update":
//                $tempCustomer = new Customer($cusNic,$cusName,$adress,$tp,$userName,$password);
//                $resp = $customerBO->updateCustomer($tempCustomer);
//                echo $resp;
//        }

//        break;
}