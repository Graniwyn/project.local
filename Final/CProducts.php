<?php
include_once('db.php');
class CProducts
{
    public function products($lim = ''): array
    {
        if ($lim === '') {
            $sql = "SELECT * FROM Products ORDER BY DATE_CREATE DESC";
        } else {
            $sql = "SELECT * FROM Products ORDER BY DATE_CREATE DESC LIMIT $lim";
        }
        $query = dbQuery($sql);
        return $query->fetchAll();
    }
    public function hide($id): bool
    {
        $sql = "UPDATE Products SET IS_HIDDEN=1 WHERE id=$id";
        $query = dbQuery($sql);
        return true;
    }
    public function plusQuantity($id): bool
    {
        $sql = "UPDATE Products SET PRODUCT_QUANTITY=PRODUCT_QUANTITY+1 WHERE id=$id";
        $query = dbQuery($sql);
        return true;
    }
    public function minusQuantity($id): bool
    {
        $sql = "UPDATE Products SET PRODUCT_QUANTITY=PRODUCT_QUANTITY-1 WHERE id=$id";
        $query = dbQuery($sql);
        return true;
    }
}
