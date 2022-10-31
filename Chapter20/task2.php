<?php
$s1 = "Здесь есть email 123.mail@123.ru";
echo (preg_match('/(\S+)@([a-zA-Z0-9]+)\.([a-zA-Z]+)/i', $s1) ? "Есть Email" : "Нет Email");
