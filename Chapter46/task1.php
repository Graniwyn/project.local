<?php
$inputXML = file_get_contents('input.xml');
$content = new SimpleXMLElement($inputXML);
$phoneNumber = (string) $content->Destination;
$phoneNumber = "8" . "(" . substr($phoneNumber, 1, 3) . ")" . substr($phoneNumber, 4, 3) . "-" . substr($phoneNumber, 7, 2) . "-" . substr($phoneNumber, 9, 2);
$content->Destination = $phoneNumber;
$content->asXML('output.xml');
