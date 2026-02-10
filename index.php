<?php 
echo 'Введите имя: ';
$name = trim(fgets(STDIN));
echo 'Введите фамилию: ';
$surname = trim(fgets(STDIN));
echo 'Введите отчество: ';
$patronymic = trim(fgets(STDIN));

$fullname = mb_strtoupper(mb_substr($surname, 0 , 1, 'UTF-8'), 'UTF-8') . mb_strtolower(mb_substr($surname, 1 , null, 'UTF-8'), 'UTF-8') . ' ' .
            mb_strtoupper(mb_substr($name, 0 , 1, 'UTF-8'), 'UTF-8') . mb_strtolower(mb_substr($name, 1 , null, 'UTF-8'), 'UTF-8') . ' ' .
            mb_strtoupper(mb_substr($patronymic, 0 , 1, 'UTF-8'), 'UTF-8') . mb_strtolower(mb_substr($patronymic, 1 , null, 'UTF-8'), 'UTF-8');

$fio = mb_strtoupper(mb_substr($surname, 0 , 1, 'UTF-8'), 'UTF-8') . mb_strtoupper(mb_substr($name, 0 , 1, 'UTF-8'), 'UTF-8') . 
        mb_strtoupper(mb_substr($patronymic, 0 , 1,'UTF-8'), 'UTF-8');

$surnameAndInitials = mb_strtoupper(mb_substr($surname, 0 , 1, 'UTF-8'), 'UTF-8') . mb_strtolower(mb_substr($surname, 1 , null, 'UTF-8'), 'UTF-8') . ' ' . 
                        mb_strtoupper(mb_substr($name, 0 , 1, 'UTF-8'), 'UTF-8') . '.' . mb_strtoupper(mb_substr($patronymic, 0 , 1, 'UTF-8'), 'UTF-8') . '.';

echo "Полное имя: '$fullname'" . PHP_EOL;
echo "Фамилия и инициалы: '$surnameAndInitials'" . PHP_EOL;
echo "Аббревиатура: '$fio'"  . PHP_EOL;
?>