<?php
include_once('db.php');
class Reviews
{
    public function countOfPages(): int
    {
        $sql = "SELECT COUNT(*) FROM reviews";
        $query = dbQuery($sql);
        $count = ceil($query->fetchAll()[0]['count'] / 3);
        return $count;
    }
    public function limitedReviews($lim = '3', $offset = ''): array
    {
        $sql = "SELECT * FROM reviews ORDER BY name LIMIT $lim OFFSET $offset";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }
}
