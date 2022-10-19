<?php
function recursion($iNumber)
{
    if ($iNumber <= 0) return 0;
    else
        return $iNumber + recursion($iNumber - 1);
}
