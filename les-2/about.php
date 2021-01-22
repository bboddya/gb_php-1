<?php

echo "<strong>Задания 1-4!</strong>";
echo "<br>";

//Exp 1

echo "<br>";
echo "<strong>exp 1</strong>";
echo "<br>";

$a = rand(-5, 5);
$b = rand(-5, 5);

echo "<strong>Переменная a</strong>";
echo "<br>";
echo $a;
echo "<br>";

echo "<strong>Переменная b</strong>";
echo "<br>";
echo $b;
echo "<br>";

echo "<strong>Результат вычисления</strong>";
echo "<br>";

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}

echo "<br>";
echo "<br>";

//Exp 2

echo "<strong>exp 2</strong>";
echo "<br>";

//version 1
$c = rand(0, 15);

echo "<strong>Переменная c</strong>";
echo "<br>";
echo $c;
echo "<br>";

echo "<strong>version 1</strong>";
echo "<br>";

switch ($c) {
    case 1;
        echo 1;
    case 2;
        echo 2;
    case 3;
        echo 3;
    case 4;
        echo 4;
    case 5;
        echo 5;
    case 6;
        echo 6;
    case 7;
        echo 7;
    case 8;
        echo 8;
    case 9;
        echo 9;
    case 10;
        echo 10;
    case 11;
        echo 11;
    case 12;
        echo 12;
    case 13;
        echo 13;
    case 14;
        echo 14;
    case 15;
        echo 15;
}

echo "<br>";
echo "<strong>version 2</strong>";
echo "<br>";

//version 2

foo($c);

function foo($n)
{
    echo $n++;
    if ($n <= 15) foo($n);
}

//exp 3

echo "<br>";
echo "<br>";
echo "<strong>exp 3</strong>";
echo "<br>";

function sum($a, $b)
{
    return $a + $b;
}

function difference($a, $b)
{
    return $a - $b;
}

function multiplier($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    return ($a === 0) ? "Невозможно делить на 0" : ($b == 0) ? 0 : $a / $b;
}

echo "<strong>Сумма</strong>";
echo "<br>";
echo sum($a, $b);
echo "<br>";

echo "<strong>Разность</strong>";
echo "<br>";
echo difference($a, $b);
echo "<br>";

echo "<strong>Произведение</strong>";
echo "<br>";
echo multiplier($a, $b);
echo "<br>";

echo "<strong>Частное</strong>";
echo "<br>";
echo division($a, $b);

//exp 4

echo "<br>";
echo "<br>";
echo "<strong>exp 4</strong>";
echo "<br>";

function mathOperation($arg1, $arg2, $operation = "sum")
{
    switch ($operation) {
        case "sum";
            return sum($arg1, $arg2);
            break;
        case "difference";
            return difference($arg1, $arg2);
            break;
        case "multiplier";
            return multiplier($arg1, $arg2);
            break;
        case "division";
            return division($arg1, $arg2);
            break;
    }
}

echo "<strong>Результат переданной функции</strong>";
echo "<br>";
echo mathOperation($a, $b, "multiplier");