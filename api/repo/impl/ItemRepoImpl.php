<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/6/18
 * Time: 12:27 AM
 */

require_once __DIR__."/../ItemRepo.php";
require_once __DIR__."/../../core/Item.php";



class ItemRepoImpl implements ItemRepo
{

    private $connection;

    /**
     * ItemRepoImpl constructor.
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

    public function addItem(Item $item): bool
    {
        $resp=$this->connection->query(
            "INSERT INTO Item VALUES(
                '{$item->getIID()}',
                '{$item->getName()}',
                '{$item->getDiscription()}',
                '{$item->getDailyRental()}')");
        if($resp){
            echo "Customer Add..!";
        }else{
            echo "Customer Not Add..!";
        }

        echo mysqli_error($this->connection);

        return $resp;
    }

    public function deleteItem(string $id): bool
    {
        // TODO: Implement deleteItem() method.
    }

    public function searchItem(string $id): array
    {
        // TODO: Implement searchItem() method.
    }

    public function updateItem(Item $item): bool
    {
        // TODO: Implement updateItem() method.
    }

    public function getAllItem(): array
    {
        $resultSet=$this->connection->query("select * from Item");
        return $resultSet->fetch_all();
    }
}