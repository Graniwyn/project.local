<?php
require_once('db.php');
class Users
{
    public function registration($name, $password): array
    {
        $sql = "INSERT INTO users (name,password) VALUES ('$name','$password')";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }
    public function findUser($name): bool
    {
        $sql = "SELECT * FROM users WHERE name='$name'";
        $query = dbQuery($sql);
        if (isset($query->fetchAll()[0]['name']))
            return true;
        else
            return false;
    }
    public function checkUserPassword($name, $password): bool
    {
        $sql = "SELECT * FROM users WHERE name='$name' and password='$password'";
        $query = dbQuery($sql);
        if (isset($query->fetchAll()[0]['name']))
            return true;
        else
            return false;
    }
    public function getUser($name, $password): array
    {
        $sql = "SELECT * FROM users WHERE name='$name' and password='$password'";
        $query = dbQuery($sql);
        return $query->fetchAll()[0];
    }
}
