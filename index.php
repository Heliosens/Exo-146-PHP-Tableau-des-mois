<?php
$arrMonth = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
];

// exo 2

echo $arrMonth[2] . "<br>";

// exo 3

echo $arrMonth[5] . "<br>";

// exo 4

$key = array_search("aout", $arrMonth);

$arrMonth[$key] = "août";

// exo 5

$arrHaut = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas-de-Calais", "80" => "Somme"];

// exo 6

echo $arrHaut[59];
echo "<br>";

// exo 7

$arrHaut[51] = 'Champagne';

// exo 8

foreach ($arrMonth as $item){
    echo $item . " ";
}

echo "<br>";

// ex 9

foreach ($arrHaut as $item){
    echo $item;
}
echo "<br>";

// 10
foreach ($arrHaut as $key => $item){
    echo "Le département " . $item . " a le numéro " . $key . "<br>";
}

