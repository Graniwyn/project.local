<?php
class Logging
{
    public function writeMessage2Log($sLogMessage): void
    {
        $head = "======" . date("H_i_s") . "======" . "\n";
        $fileName = date("Y_m_d_H_i__") . "messages" . ".log";
        if (file_exists("logs/$fileName"))
        {
            $data = print_r($sLogMessage, true) . "\n";
            file_put_contents("logs/$fileName", $data, FILE_APPEND);
        }
        else
        {
            $data = $head . print_r($sLogMessage, true) . "\n";
            file_put_contents("logs/$fileName", $data);
        }
    }
}
$obLogging = new Logging;
$i = 0;
$arTestArray = [[], [0], [[], [1]]];
$obLogging->writeMessage2Log($i);
$obLogging->writeMessage2Log($arTestArray);
