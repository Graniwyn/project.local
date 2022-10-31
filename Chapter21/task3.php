<?php
$sExecuteCode = '
<?
$arStringsList = ["string1", "string2", "string3"];
?>


<ul>
<?foreach($arStringsList as $sStringVal):?>
    <li>
        <?=$sStringVal?>
    </li>
<?endforeach;?>
</ul>
';
echo eval("?>$sExecuteCode<?php");
