<?php
require_once('reviews.php');
$reviews = new Reviews;
$countOfPages = $reviews->countOfPages();
?>
<? foreach ($reviews->limitedReviews(3, $_POST['page'] * 3 - 3) as $review)
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
    <a href="task9.php?page=<?= $count ?>"><?= $count ?></a>
<? } ?>