<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="surveyform" action="task1.php" method="POST">
        Фамилия <input type="text" id="surname" name="surname">
        <br>
        Имя <input type="text" id="name" name="name">
        <br>
        Отчество <input type="text" id="patronymic" name="patronymic"><input type="checkbox" name="haspatronymic" id="haspatronymic" value="0">Нет отчества?
        <br>
        Email <input type="text" id="email" name="email">
        <br>
        <b>Являетесь ли вы клиентом нашей компании?</b>
        <br>

        <input name="client" id="client" type="radio" value="long">Да, более года
        <br>
        <input name="client" id="client" type="radio" value="short">Да, менее года
        <br>
        <input name="client" id="client" type="radio" value="no">Нет
        <br>
        <b>Была ли решена ваша проблема</b>
        <br>
        <input name="isresolved" id="isresolved" type="radio" value="yes">Да
        <br>
        <input name="isresolved" id="isresolved" type="radio" value="no">Нет
        <br>
        <b>Довольны ли Вы качеством обслуживания?</b>
        <br>
        <input name="condition" id="condition" type="radio" value="verysatisfied">Очень доволен
        <br>
        <input name="condition" id="condition" type="radio" value="satisfied">Доволен
        <br>
        <input name="condition" id="condition" type="radio" value="neutral">Нейтрально
        <br>
        <input name="condition" id="condition" type="radio" value="dissatisfied">Недоволен
        <br>
        <input name="condition" id="condition" type="radio" value="verydissatisfied">Очень недоволен
        <br>
        <div id="moredetails" style="display: none;">
            Пожалуйста, опишите причину недовольства подробнее
            <input type="text" name="grudge" id="grudge" value="">
        </div>
        <input type="reset">
        <br>
        <input type="submit" id="send" value="Отправить">
    </form>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="functions.js"></script>
</body>

</html>