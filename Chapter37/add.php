<?php
require_once('reviews.php');
$cReviews = new Reviews;
$cReviews->addReview($_POST['name'], $_POST['email'], $_POST['position'], $_POST['review']);
echo "Отзыв отправлен";
?>
<br>
<a href="task1.php">Вернуться на главную</a>