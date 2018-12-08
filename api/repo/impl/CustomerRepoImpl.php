<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 10:46 PM
 */

require_once __DIR__."/../CustomerRepo.php";
require_once __DIR__."/../../core/Customer.php";

class CustomerRepoImpl implements CustomerRepo
{

    private $connection;

    /**
     * CustomerRepoImpl constructor.
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

    public function addCustomer(Customer $customer): bool
    {
        $resp=$this->connection->query(
            "INSERT INTO Customer VALUES(
                '{$customer->getNic()}',
                '{$customer->getName()}',
                '{$customer->getAdress()}',
                '{$customer->getTp()}',
                '{$customer->getUserName()}',
                '{$customer->getPassword()}')");
        if($resp){
            echo "Customer Add..!";
        }else{
            echo "Customer Not Add..!";
        }

        return $resp;
    }

    public function deleteCustomer(string $id): bool
    {
        // TODO: Implement deleteCustomer() method.
    }

    public function searchCustomer(string $id): array
    {
        // TODO: Implement searchCustomer() method.
    }

    public function updateCustomer(Customer $customer): bool
    {
        // TODO: Implement updateCustomer() method.
    }

    public function getAllCustomer(): array
    {
        $resultSet=$this->connection->query("SELECT * FROM Customer");
        return $resultSet->fetch_all();
    }
}