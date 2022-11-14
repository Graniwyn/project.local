<?php
class Sanitizer
{
    function sanitize(array $data, array $options): array
    {
        return filter_var_array($data, $options, add_empty: false);
    }
}
class Validator
{
    function validate(array $data, array $options): array
    {
        $arTemp = filter_var_array($data, $options, add_empty: false);
        foreach ($arTemp as $k => $v)
        {
            if ($v === false)
            {
                $arReturn = ["SUCCESS" => false, 'WRONG_FIELD_NAME' => $k];
                return $arReturn;
            }
        }
        $arReturn = ['SUCCESS' => true];
        return $arReturn;
    }
}
$arValidate = [
    'VALIDATE_BOOLEAN' => 'yes',
    'VALIDATE_EMAIL' => '<>dwaij31@mail.ru',
    'VALIDATE_FLOAT' => '12,4',
    'VALIDATE_INT' => '2',
    'VALIDATE_IP' => '93.48.31.22',
    'VALIDATE_REGEXP' => '',
    'VALIDATE_URL' => 'https://ya.ru/',

];
$arSanitaze = [
    'SANITIZE_EMAIL' => '<>dwaij31@mail.ru',
    'SANITIZE_ENCODED' => 'dwa<ru>.dawj,dwa',
    'SANITIZE_SANITIZE_ADD_SLASHES' => 'one two/three.com',
    'SANITIZE_NUMBER_FLOAT' => '6432634fsefes*23.4fas',
    'SANITIZE_NUMBER_INT' => 'dsads23+23',
    'SANITIZE_SPECIAL_CHARS' => '&amp<html>one</html>',
    'SANITIZE_FULL_SPECIAL_CHARS' => '<a href=\/dast/\>Test</a>',
    'SANITIZE_STRING' => '<a href=\/dast/\>Test</a>',
    'SANITIZE_URL' => '2451dawdjadwj  @yahoo.com',
];
$arOptions = [
    'VALIDATE_BOOLEAN' => FILTER_VALIDATE_BOOLEAN,
    'VALIDATE_EMAIL' => FILTER_VALIDATE_EMAIL,
    'VALIDATE_FLOAT' => FILTER_VALIDATE_FLOAT,
    'VALIDATE_INT' => FILTER_VALIDATE_INT,
    'VALIDATE_IP' => [
        'filter' => FILTER_VALIDATE_IP,
        'flag' => FILTER_FLAG_IPV4
    ],
    'VALIDATE_REGEXP' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options' => ['regexp' => '/^ch\d+$/']
    ],
    'VALIDATE_URL' => FILTER_VALIDATE_URL,
    'SANITIZE_EMAIL' => FILTER_SANITIZE_EMAIL,
    'SANITIZE_ENCODED' => FILTER_SANITIZE_ENCODED,
    'SANITIZE_SANITIZE_ADD_SLASHES' => FILTER_SANITIZE_ADD_SLASHES,
    'SANITIZE_NUMBER_FLOAT' => FILTER_SANITIZE_NUMBER_FLOAT,
    'SANITIZE_NUMBER_INT' => FILTER_SANITIZE_NUMBER_INT,
    'SANITIZE_SPECIAL_CHARS' => FILTER_SANITIZE_SPECIAL_CHARS,
    'SANITIZE_FULL_SPECIAL_CHARS' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'SANITIZE_STRING' => FILTER_SANITIZE_STRING,
    'SANITIZE_URL' => FILTER_SANITIZE_URL,
];
$obSanitizer = new Sanitizer;
$obSanitizer->sanitize($arSanitaze, $arOptions);
$obValidator = new Validator;
$obValidator->validate($arValidate, $arOptions);
