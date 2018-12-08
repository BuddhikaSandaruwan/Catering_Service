<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/3/18
 * Time: 10:35 PM
 */

require_once __DIR__."/../core/Customer.php";

interface CustomerRepo
{
    public function setConnection(mysqli $connection): void;

    public function addCustomer(Customer $customer): bool ;

    public function deleteCustomer(string $id): bool ;

    public function searchCustomer(string $id): array ;

    public function updateCustomer(Customer $customer): bool ;

    public function getAllCustomer(): array ;

}