<?php
$year = 2012;
$title = "Lorem ipsum dolor sit.";
$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, earum, perferendis. Asperiores cum dolore ex facere fugit in ipsam, minima nam neque non quae ratione reprehenderit soluta sunt ut veritatis.";

$text = file_get_contents("index.php");

$text = str_replace("{{year}}", $year, $text);
$text = str_replace("{{title}}", $title, $text);
$text = str_replace("{{description}}", $description, $text);

//exp 5
$a = 1;
$b = 2;

$b = $b - $a;
$a = $a + $b;

echo $text;

echo $a;
echo $b;