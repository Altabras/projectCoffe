<?php

$age = 24;

define('AGE_1', 20);
define('AGE_2', 40);
define('AGE_3', 60);
define('AGE_4', 80);

switch ($age) {
    case $age < AGE_1 :
        echo "Вам менше 20-ти років";  // Перші дві умови виповняє,якщо міняти вік
        break;
    case $age > AGE_1 or $age <= AGE_2:
        echo "Вам більше 20-ти і менше 40 років";
        break;
    case $age > AGE_2 or $age <= AGE_3:
        echo "Вам більше 40 і менше 60 років";  // А коли ставити вік "41+" то воно всеодно показує вам більше 20 і менше 40
        break;
    case $age > AGE_3 or $age <= AGE_4:
        echo "Вам більше 60 і менше 80 років";
        break;
    default:
        echo "Вам більше 80 років";
}