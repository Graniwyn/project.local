<?php
require_once('reviews.php');
$reviews = new Reviews;
$reviews->addReview($_POST['name'], $_POST['email'], $_POST['position'], $_POST['review']);
