<?php
require_once('reviews.php');
$cReviews = new Reviews;
if (isset($_POST['g-recaptcha-response']) and !empty($_POST['g-recaptcha-response']))
{

    if ($cReviews->validateRecaptcha($_POST['g-recaptcha-response']))
    {
        $cReviews->addReview($_POST['name'], $_POST['email'], $_POST['position'], $_POST['review']);
        echo "Данные записаны";
    }
    else
    {
        echo "Ошибка. Вы робот";
    }
}
else
    echo "Ошибка";

?>
<br>
<a href="task1.php">Вернуться на главную</a>