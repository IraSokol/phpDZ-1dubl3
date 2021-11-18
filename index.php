<?php
const testConstanta = 'asd';
$user_name = "Igor";

function show_something()
{
    return 'SOMETHING';
}

if (1 == 1) {
    echo 'hi';
}




//ДЗ 1
$name = 'Меня зовут Ира';
$age = 'Мне 99 лет';
$symbols0 = '"!|/';
$symbols1 = "'";
$symbols2 = '"\ ';
$symbols = $symbols0 . $symbols1 . $symbols2;

echo "<pre>";
var_dump($name, $age, $symbols);


echo "<br>";

//ДЗ 2
echo "<pre>";
const ALL_DRAWINGS = 80;
const ALL = 'Всего рисунков ';
var_dump(ALL . ALL_DRAWINGS);
const MARKER_DRAWINGS = 23;
const MARKER = 'Рисунков фломастерами ';
var_dump(MARKER . MARKER_DRAWINGS);
const PENCIL_DRAWINGS = 40;
const PENCIL = 'Рисунков карандашами ';
var_dump(PENCIL . PENCIL_DRAWINGS);
const PAINT_DRAWINGS = (ALL_DRAWINGS - MARKER_DRAWINGS - PENCIL_DRAWINGS);
const PAINT = 'Рисунков красками ';
var_dump(PAINT . PAINT_DRAWINGS);

echo "<br>";

//ДЗ 3

$age = '';

if ($age >= 18 & $age <= 65) {
    echo 'Вам еще работать и работать <br>';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию <br>';
} elseif ($age >= 1 & $age <= 17) {
    echo 'Вам еще рано работать <br>';
} else {
    echo 'Неизвестный возраст <br>';
}
echo "<br>";


//ДЗ 4
$day = 8;
switch ($day) {
    case 1:
        echo "Это рабочий день<br>";
        break;
    case 2:
        echo "Это рабочий день<br>";
        break;
    case 3:
        echo "Это рабочий день<br>";
        break;
    case 4:
        echo "Это рабочий день<br>";
        break;
    case 5:
        echo "Это рабочий день<br>";
        break;
    case 6:
        echo "Это выходной день<br>";
        break;
    case 7:
        echo "Это выходной день<br>";
        break;
    default:
        echo "Неизвестный день<br>";
}
echo "<br>";
//ДЗ 5
$cars = [
    'BMW' => ['model' => "X5", 'speed' => 120, 'doors' => 5, 'year' => 2015],
    'Toyota' => ['model' => "Y55", 'speed' => 130, 'doors' => 4, 'year' => 2016],
    'Opel' => ['model' => "Z15", 'speed' => 140, 'doors' => 3, 'year' => 2017]
];

echo "<pre>";
print_r($cars);


echo "<br>";

//ДЗ 6

$cols = 10;
$rows = 10;
$number = 0;
$number2 = 0;
$round = '(';
$round1 = ')';
$square = '[';
$square1 = ']';


echo "<table border=\"1\">";
echo ' <table border="1" style=" border-spacing: 0; ">';

for ($r = 1; $r <= $rows; $r++) {
    echo('<tr>');
    if ($r == 0) {
        for ($i = 0; $i < $rows; $i++) {
            echo('<th>' . $number2++ . '</th>');
        }
    }
    for ($c = 1; $c <= $cols; $c++) {
        if ($c == 0) {
            echo('<th>' . $number++ . '</th>');

        } else {
            if ($r % 2 == 0 & $c % 2 == 0) {
                echo('<td>' . $round . $c * $r . $round1 . '</td>');
            } else {
                if ($r % 2 == 1 & $c % 2 == 1) {
                    echo('<td>' . $square . $c * $r . $square1 . '</td>');

                } else {
                    if ($r != 0) {
                        echo('<td>' . $c * $r . '</td>');
                    }
                }
            }
        }
    }
    echo('</tr>');
}
echo "</table>";