<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

//порахувати длину масиву


var_dump(count($arr));

//перемістити перші 4 элементи масиву до кінця масиву

$delFour = array_slice($arr, 0 , 4);
$arr = array_slice($arr, 4);
$arr = array_merge($arr, $delFour);

var_dump($arr);

//отримати суму 4,5,6 елемента

$sumArr = $arr[4] + $arr[5] + $arr[6];
var_dump($sumArr);

//

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];

//
var_dump(array_diff($secondArr, $firstArr));
var_dump(array_diff($firstArr, $secondArr));
var_dump(array_intersect($firstArr,$secondArr));
var_dump(array_diff_assoc($secondArr, $firstArr));


//

$firstArr2 = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,

    ],

];

$secondElements = [];

foreach ($firstArr2 as $key => $value) {
    if (is_array($value) && isset($value[1])) {
        $secondElements[] = $value[1];
    }
}

var_dump($secondElements); // Не можу зробити