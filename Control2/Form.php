<?php
class Form
{
    public function writeCSV(array $data): void
    {
        $file = fopen('file.csv', 'a');
        fputcsv($file, $data, ";");
        fclose($file);
        echo "Данные записаны";
    }
}
$cForm = new Form();
if (isset($_POST))
    $cForm->writeCSV($_POST);
