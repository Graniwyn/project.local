<?php
include_once('db.php');
class Survey
{
    public function addSurvey($name, $surname, $patronymic, $haspatronymic, $email, $client, $resolved, $condition, $grudge): bool
    {
        $sql = "INSERT INTO survey (name,surname,patronymic,email,no_patronymic,company_client,problem_solved,quality_service,grudge) VALUES ('$name','$surname','$patronymic','$email','$haspatronymic','$client','$resolved','$condition','$grudge')";
        dbQuery($sql);
        return true;
    }
}
