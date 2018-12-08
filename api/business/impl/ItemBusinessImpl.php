<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/6/18
 * Time: 12:13 AM
 */

require_once __DIR__."/../ItemBuness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Item.php";
require_once __DIR__."/../../repo/impl/ItemRepoImpl.php";

class ItemBusinessImpl implements ItemBuness
{


    public function addItem(Item $item): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new ItemRepoImpl();
        $customerRepo->setConnection($connection);

        return $customerRepo->addItem($item);
    }

    public function deleteItem(string $id): bool
    {
        // TODO: Implement deleteItem() method.
    }

    public function serchItem(string $id): array
    {
        // TODO: Implement serchItem() method.
    }

    public function updateItem(Item $item): bool
    {
        // TODO: Implement updateItem() method.
    }

    public function getAllItem(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $ItemRepo=new ItemRepoImpl();
        $ItemRepo->setConnection($connection);
        return $ItemRepo->getAllItem();
    }
}