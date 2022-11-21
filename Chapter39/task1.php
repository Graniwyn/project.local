<?php
require_once('reviews.php');
$cReviews = new Reviews;
$countOfPages = $cReviews->countOfPages();
if (!isset($_GET['page']) or $_GET['page'] === '1')
    $reviews = $cReviews->limitedReviews('3', '0');
else
    $reviews = $cReviews->limitedReviews('3', $_GET['page'] * 3 - 3);
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
    <a href="task1.php?page=<?= $count ?>"><?= $count ?></a>
<? } ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="add.php" method="POST">

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
        <div class="g-recaptcha" data-sitekey="6LeJVxwjAAAAAG9rhbWQDBnMrtV9AapVyYEml639"></div>
        <br>
        <input type="submit" value="Отправить">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>