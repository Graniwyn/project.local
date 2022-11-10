<?php
if (!isset($_COOKIE['TEST_COOKIE']))
    setcookie("TEST_COOKIE", "TEST_31");
else
    setcookie('TEST_COOKIE', '', time());
