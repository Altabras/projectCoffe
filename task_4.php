<?php


$colors = array(
    array(
        'color' => 'black',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#000',
        ),
    ),
    array(
        'color' => 'white',
        'category' => 'value',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FFF',
        ),
    ),
    array(
        'color' => 'red',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'blue',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#00F',
        ),
    ),
    array(
        'color' => 'yellow',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'green',
        'category' => 'hue',
        'type' => 'secondary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#0F0',
        ),
    ),
);

$hueCategory = array();
$valueCategory = array();

foreach ($colors as $color) {
    if ($color['category'] === 'hue') {
        $hueCategory[] = $color;
    } elseif ($color['category'] === 'value') {
        $valueCategory[] = $color;
    }
}

// Функція для виведення інформації про колір
function printColorInfo($color) {
    echo "Це колір {$color['color']} він з категорії {$color['category']}.";

    if (isset($color['type'])) {
        echo " Тип кольору - {$color['type']}.";
    }

    echo " В даному кольорі наступні коди rgba({$color['code']['rgba'][0]}, {$color['code']['rgba'][1]}, {$color['code']['rgba'][2]}, {$color['code']['rgba'][3]}) і такий hex код -> {$color['code']['hex']}.\n";
}

// Виведення кольорів за категоріями
echo "Кольори категорії 'hue':\n";
foreach ($hueCategory as $color) {
    printColorInfo($color);
}

echo "\nКольори категорії 'value':\n";
foreach ($valueCategory as $color) {
    printColorInfo($color);
}