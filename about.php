<?php

error_reporting(E_ALL);

$surname = 'Денисюк';
$firstName = 'Андрей';
$secondName = 'Валерьевич';
$age = '19 лет';
$email = 'andrejdenisiuk@yandex.ru';
$nativeCity = 'Пермь';
$shortInfo = 'Студент второго курса факультета бизнеса и информатики, мечтающий узнавать новое и интересное, изучать языки программирования и создавать что-то реально рабочее! Двухлетний опыт работы с C# и десктопом не заинтересовал, и поэтому было решено пойти в веб-программирование:)';

if (!empty($_GET["pageType"])) {
    $typeOfPage = $_GET["pageType"];

    if ($typeOfPage == "1") {
        $head = 'Главная' . ' ' . 'страница';
        $fieldsetClass = "main-container-fieldset-pic";
    } else
        if ($typeOfPage == "2") {
            $head = "Информация";
            $fieldsetClass = "main-container-fieldset-info";
        }
}
else
{
    $head = "Главная страница";
    $fieldsetClass = "main-container-fieldset-pic";
}
$title = "Веб-приложение";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
<header class="header-container">
    <div class="header-container__h1">
        <h1><?php echo $head; ?></h1>
                <a class="header-container-link" href="about.php?pageType=1">Главная</a>
                <a class="header-container-link" href="about.php?pageType=2">Информация</a>
    </div>
                     
</header>

<div class="main-container">
    <fieldset class="<?php echo $fieldsetClass?>">
        <?php if ($head === "Информация")
        {
            echo "<table class='main-container-table'>
            <tr class='table-row'>
                <td class='table-cell'>Фамилия</td>
                <td class='table-cell'>$surname</td>
            </tr>
            <tr class='table-row'>
                <td class='table-cell'>Имя</td>
                <td class='table-cell'>$firstName</td>
            </tr>
            <tr class='table-row'>
                <td class='table-cell'>Отчество</td>
                <td class='table-cell'>$secondName</td>
            </tr>
            <tr class='table-row'>
                <td class='table-cell'>Возраст</td>
                <td class='table-cell'>$age</td>
            </tr>
            <tr class='table-row'>
                <td class='table-cell'>Электронный адрес</td>
                <td class='table-cell'>$email</td>
            </tr>
            <tr class='table-row'>
                <td class='table-cell'>Город</td>
                <td class='table-cell'>$nativeCity</td>
            </tr>
            <tr class='table-row'>
                <td class='table-cell'>Информация</td>
                <td class='table-cell'>$shortInfo</td>
            </tr>
        </table>" ;
        }
        else
        {
            echo "";
        }
        ?>
    </fieldset>
</div>
</body>
</html>
