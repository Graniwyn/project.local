<?php

function errorFunc1()
{
    echo __FUNCTION__;
}
function errorFunc2()
{
    echo __FUNCTION__;
}

set_error_handler('errorFunc1');
set_error_handler('errorFunc2');
trigger_error("Ошибка 1", E_USER_ERROR);
restore_error_handler();
trigger_error("Ошибка 2", E_USER_ERROR);
restore_error_handler();
trigger_error("Ошибка 3", E_USER_ERROR);
