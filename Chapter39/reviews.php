<?php
include_once('db.php');
class Reviews
{
    public function countOfPages(): int
    {
        $sql = "SELECT COUNT(*) FROM reviews";
        $query = dbQuery($sql);
        $count = ceil($query->fetchAll()[0]['count'] / 3);
        return $count;
    }
    public function limitedReviews($lim = '3', $offset = ''): array
    {
        $sql = "SELECT * FROM reviews ORDER BY name LIMIT $lim OFFSET $offset";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }
    public function addReview($name, $email, $position, $reviewText): bool
    {
        $sql = "INSERT INTO reviews (name,position,email,review_text) VALUES ('$name','$position','$email','$reviewText')";
        dbQuery($sql);
        return true;
    }
    public function validateRecaptcha(string $response): bool
    {
        $verifyURL = 'https://www.google.com/recaptcha/api/siteverify';
        $secretKey = '6LeJVxwjAAAAAMyZqMXUOWg6mTlaygBg7t8tKZM_';
        $data = ['secret' => $secretKey, 'response' => $response];
        $ch = curl_init($verifyURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $verifyResponse = curl_exec($ch);
        curl_close($ch);
        $responseData = json_decode($verifyResponse, true);
        if (isset($responseData['success']) and $responseData['success'] === true)
            return true;
        elseif (isset($responseData['success']) and $responseData['success'] !== true)
            return false;
    }
}
