<?php
if (isset($_FILES['file']))
{
    $destinationName = __DIR__ . "/test_vdita_file." . pathinfo($_FILES['file']['full_path'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['file']['tmp_name'], $destinationName);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="task1.php" method="POST" enctype="multipart/form-data">
        <input type="file" required name="file">
        <br>
        <input type="submit" value="Отправить">
</body>

</html>