<?php


spl_autoload_register(function ($classname) {
    if (strpos($classname, "LIB1") !== false) {
        $file = mb_strcut($classname, strpos($classname, "LIB1"));
        require_once(__DIR__ . "/library1/src/tools/" . $file . ".php");
    }
});
spl_autoload_register(function () {

    require_once(__DIR__ . "/library2/LIB2Test3.php");
});
spl_autoload_register(function () {

    require_once(__DIR__ . "/additional_libraries/library3/classes/main/LIB3Test4.php");
});
$a = new \library1\tools\LIB1Test1;
$a->print();
$b = new \library1\general\LIB1Test2;
$b->print();
$c = new \library2\LIB2Test3;
$c->print();
$d = new \library3\main\LIB3Test4;
$d->print();
