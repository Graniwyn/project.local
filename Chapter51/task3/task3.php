<?php
require_once('reviews.php');
$cReviews = new Reviews;
$countOfPages = $cReviews->countOfPages();
if (!isset($_GET['page']) or $_GET['page'] === '1')
    $reviews = $cReviews->limitedReviews('3', '0');
else
    $reviews = $cReviews->limitedReviews('3', $_GET['page'] * 3 - 3);
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $cReviews->addReview($_POST['name'], $_POST['email'], $_POST['position'], $_POST['review']);
    $rnd = time();
    header("Location: http://{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}?$rnd");
    exit();
}
?>
<? foreach ($reviews as $review)
{ ?>
    <h1><?= $review['name'] ?></h1>
    <?= $review['position'] ?>
    <?= $review['email'] ?>
    <blockquote>
        <p><?= $review['review_text'] ?></p>
    </blockquote>
<? } ?>
<? for ($count = 1; $count <= $countOfPages; $count++)
{ ?>
    <a href="task3.php?page=<?= $count ?>"><?= $count ?></a>
<? } ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="task3.php" method="POST">
        Имя <input type="text" name="name">
        <br>
        Email <input type="text" name="email">
        <br>
        Должность <input type="text" name="position">
        <br>
        Отзыв
        <br>
        <textarea name='review' rows='10' cols='40'></textarea>
        <br>
        <input type="submit" value="Отправить">
    </form>
    <button id="hide">Скрыть/отобразить</button>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#hide").on("click", hide)
        })

        function hide() {
            if ($("form").is(":visible"))
                $("form").hide();
            else
                $("form").show();

        }
    </script>
</body>

</html>