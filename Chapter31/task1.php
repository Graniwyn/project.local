<?php
if (!headers_sent($filename, $line)) {
    header('Content-type: application/json');
    exit;
} else
    echo $filename, " ", $line;
