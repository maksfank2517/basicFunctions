<?php 
echo 'Введите имя: ';
$name = trim(fgets(STDIN));
echo 'Введите фамилию: ';
$surname = trim(fgets(STDIN));
echo 'Введите отчество: ';
$patronymic = trim(fgets(STDIN));

$fullname = mb_ucfirst($surname) . ' ' . mb_ucfirst($name) . ' ' . mb_ucfirst($patronymic);
$fio = mb_strtoupper(mb_substr($surname, 0 , 1)) . mb_strtoupper(mb_substr($name, 0 , 1)) . mb_strtoupper(mb_substr($patronymic, 0 , 1));
$surnameAndInitials = mb_ucfirst($surname) . ' ' . mb_strtoupper(mb_substr($name, 0 , 1)) . '.' . mb_strtoupper(mb_substr($patronymic, 0 , 1)) . '.';

echo "Полное имя: '$fullname'" . PHP_EOL;
echo "Фамилия и инициалы: '$surnameAndInitials'" . PHP_EOL;
echo "Аббревиатура: '$fio' \\" . PHP_EOL;

?>