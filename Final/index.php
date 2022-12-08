<?

require_once('CProducts.php');
$obCProducts = new CProducts;
$arProducts = $obCProducts->products();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>PRODUCT_ID</th>
            <th>PRODUCT_NAME</th>
            <th>PRODUCT_PRICE</th>
            <th>PRODUCT_ARTICLE</th>
            <th>PRODUCT_QUANTITY</th>
            <th>DATE_CREATE</th>
          
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arProducts as $products) { ?>
            <?php if ($products['IS_HIDDEN'] == 1) continue ?>
            <tr id=<?= $products['ID'] ?>>
                <td><?= $products['ID'] ?></td>
                <td><?= $products['PRODUCT_ID'] ?></td>
                <td class=<?= "td" . $products['ID'] ?>><?= $products['PRODUCT_NAME'] ?></td>
                <td><?= $products['PRODUCT_PRICE'] ?></td>
                <td><?= $products['PRODUCT_ARTICLE'] ?></td>
                <td>
                    <div class='quantity' id=<?= $products['ID']  ?>><?= $products['PRODUCT_QUANTITY'] ?></div>
                    <button class='plus' id=<?= $products['ID']  ?> type="button">+</button>
                    <button class='minus' id=<?= $products['ID']  ?> type="button">-</button>
                </td>
                <td><?= $products['DATE_CREATE'] ?></td>
                <td class='hidebtn'>
                    <button class='button' id=<?= $products['ID']  ?> type="button">Скрыть</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="functions.js"></script>
</body>

</html>