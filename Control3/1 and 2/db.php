<?php
const dsn = 'pgsql:host=localhost;dbname=homework';
const username = 'graniwyn';
const password = '1234';
function dbInstance(): PDO
{
    static $db;

    if ($db === null)
    {
        $db = new PDO(dsn, username, password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        //$db->exec('SET NAMES UTF8');
    }

    return $db;
}

function dbQuery(string $sql, array $params = []): PDOStatement
{
    $db = dbInstance();
    $query = $db->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $query;
}

function dbCheckError(PDOStatement $query): bool
{
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE)
    {
        echo $errInfo[2];
        exit();
    }

    return true;
}
