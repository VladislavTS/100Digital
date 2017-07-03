<?php

$studiosArr = $_POST["studiosArr"];
$projectTheme = $_POST["projectTheme"];
$projectDescription = $_POST["projectDescription"];
$projectUser = $_POST["projectUser"];
$projectMail = $_POST["projectMail"];
$projectPhone = $_POST["projectPhone"];
$projectStatus = $_POST["projectStatus"];
$projectCompany = $_POST["projectCompany"];
$projectCompanyPhone = $_POST["projectCompanyPhone"];

$studios = implode(",", $studiosArr);

$to = 'anubizzzz@ya.ru';
$title = $projectTheme;
$message = "
$projectTheme\n
Список агенств:
$studios\n
$projectDescription\n
ФИО: $projectUser
Телефон: $projectMail
Должность: $projectStatus
Компания: $projectCompany
Телефон компании: $projectCompanyPhone
";

mail($to, $title, $message);

?>