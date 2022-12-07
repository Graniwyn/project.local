<?php
class Plants
{
    public function download_page($path)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        $retValue = curl_exec($ch);
        curl_close($ch);
        if (!is_dir(__DIR__ . '/products'))
        {
            mkdir(__DIR__ . '/products');
            file_put_contents(__DIR__ . '/products/plant_catalog.xml', $retValue);
        }
        else
            file_put_contents(__DIR__ . '/products/plant_catalog.xml', $retValue);
        return true;
    }
}
