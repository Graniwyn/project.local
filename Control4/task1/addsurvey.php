<?php
require_once('survey.php');
$survey = new Survey;
$survey->addSurvey($_POST['name'], $_POST['surname'], $_POST['patronymic'], $_POST['haspatronymic'], $_POST['email'], $_POST['client'], $_POST['resolved'], $_POST['condition'], $_POST['grudge']);
