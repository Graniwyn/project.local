<?php
require_once("functions.php");
$sUrl = "https://example.com/test/1234/path/test/sample?email=xyz4@test.com&testin=123";
$parsed = parse_url($sUrl);
if (strpos($parsed['path'], "/path/test/") !== false) {
    unset($parsed['query']);
    $temp['param1'] = "123";
    $temp['param2'] = "012";
    $parsed['query'] = http_build_query($temp, "", "&amp");
    $finalUrl = http_build_url($parsed);
} elseif (strpos($parsed['path'], "/test/path/") !== false) {
    unset($parsed['query']);
    $temp['param123'] = "1";
    $temp['param012'] = "2";
    $parsed['query'] = http_build_query($temp, "", "&amp");
    $finalUrl = http_build_url($parsed);
}
echo $finalUrl;
