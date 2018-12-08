<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 11:02 PM
 */

require_once __DIR__."/../CustomerBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Customer.php";
require_once __DIR__."/../../repo/impl/CustomerRepoImpl.php";

class CustomerBusinessImpl implements CustomerBusiness
{


    public function addCustomer(Customer $customer): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $customerRepo = new CustomerRepoImpl();
        $customerRepo->setConnection($connection);

        return $customerRepo->addCustomer($customer);

    }

    public function deleteCustomer(string $id): bool
    {
        // TODO: Implement deleteCustomer() method.
    }

    public function serchCustomer(string $id): array
    {
        // TODO: Implement serchCustomer() method.
    }

    public function updateCustomer(Customer $customer): bool
    {
        // TODO: Implement updateCustomer() method.
    }

    public function getAllCustomer(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $customerRepo=new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->getAllCustomer();
    }
}