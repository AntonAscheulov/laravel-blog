<?php
mb_internal_encoding('UTF-8');
ini_set('display_errors', 'on');
error_reporting (E_ALL);

//Задача 1 количество секунд в сутках

$secondsInHour = 60*60;

$secondsInADay = $secondsInHour*24;

echo 'секунд в сутках: '.$secondsInADay.'<br>';

//Задача 2 количество секунд в 30 сутках

$secondsIn30Days = $secondsInADay*30;

echo '<br>'.'количество секунд в 30 сутках: '.$secondsIn30Days.'<br>';

//Задача 3 количество секунд в году

$secondsInAYear = $secondsInADay*365;

echo '<br>'.'количество секунд в году: '.$secondsInAYear.'<br>';

//Задача 4 количество минут в сутках

$minutesInADay = 60*24;

echo '<br>'.'количество минут в сутках: '.$minutesInADay.'<br>';

//Задача 5 количество минут в году

$minutesInAYear = $minutesInADay*365;

echo '<br>'.'количество минут в году: '.$minutesInAYear.'<br>';

//Задача 6 количество количество байт в мегабайте

$bitesInMegaBite = 1024**2;

echo '<br>'.'количество байт в мегабайте: '.$bitesInMegaBite.'<br>';

//Задача 7 количество количество байт в гиагабайте

$bitesInGigaBite = 1024**3;

echo '<br>'.'количество байт в гиагабайте: '.$bitesInGigaBite.'<br>';

//Задача 8 количество количество байт в 10 гиагабайтах

$bitesIn10GigaBite = $bitesInGigaBite*10;

echo '<br>'.'количество байт в 10 гиагабайтах: '.$bitesIn10GigaBite.'<br>';

//Задача 9 количество количество байт в терабайте

$bitesInTeraBite = 1024**4;

echo '<br>'.'количество количество байт в терабайте: '.$bitesInTeraBite.'<br>';

//Задача 10 количество количество килобайт в терабайте

$kiloBitesInTeraBite = 1024**3;

echo '<br>'.'количество количество килобайт в терабайте: '.$kiloBitesInTeraBite.'<br>';

//Задача 11 площадь круга

$r = 6;

$s = M_PI*(6**2);

echo '<br>'.'площадь круга равна: '.$s.'<br>';

//Задача 12 площадь квадрата

$a = 6;

$s2 = $a**2;

echo '<br>'.'площадь квадрата равна: '.$s2.'<br>';

//Задача 13 площадь прямоугольника

$a1 = 5;

$b = 6;

$s3 = $a1*$b;

echo '<br>'.'площадь прямоугольника равна: '.$s3.'<br>';

//Задача 14 периметр прямоугольника

$p = 2*($a1+$b);

echo '<br>'.'периметр прямоугольника равен: '.$p.'<br>';

//Задача 15 цельсий в фаренгейт

$tc = 1;

$f = ($tc*9/5)+32;

echo '<br>'.$tc.' цельсий равен: '.$f.' фаренгейт'.'<br>';

//Задача 16 фаренгейт в цельсий

$tf = 1;

$c = ($tf-32)*5/9;

echo '<br>'.$tf.' фаренгейт равен: '.$c.' цельсий'.'<br>';
?>



