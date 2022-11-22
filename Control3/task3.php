<?php
$getJson = file_get_contents("https://catfact.ninja/fact");
$jsonDecode = json_decode($getJson);
echo "<h1>$jsonDecode->fact</h1>";
