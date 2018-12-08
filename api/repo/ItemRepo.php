<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 12/6/18
 * Time: 12:17 AM
 */

require_once __DIR__."/../core/Item.php";

interface ItemRepo
{
    public function setConnection(mysqli $connection): void;

    public function addItem(Item $item): bool ;

    public function deleteItem(string $id): bool ;

    public function searchItem(string $id): array ;

    public function updateItem(Item $item): bool ;

    public function getAllItem(): array ;
}