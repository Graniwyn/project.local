<?php
include_once('db.php');
class Catalogs
{
    public function firstSelect(): array
    {
        $sql = "SELECT * FROM catalogs WHERE parent_id = 0";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }
    public function secondSelect($id): array
    {
        $sql = "SELECT * FROM catalogs WHERE parent_id = $id";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }
}
