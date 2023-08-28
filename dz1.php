<?php

$last_name = 'Hleba';

define('SMALL_SURNAME', 5);

define('MEDIUM_SURNAME', 10);

define('LARGE_SURNAME', 15);

$a = strlen($last_name);


if (strlen($last_name) == SMALL_SURNAME) {
    echo "Довжина  вашого прізвища дорівнює {$a}  і вона відповідає SMALL_SURNAME ";
} elseif (strlen($last_name) == MEDIUM_SURNAME) {
    echo "Довжина вашого прізвища дорівнює {$a} і відповідає MEDIUM_SURNAME ";
} else (strlen($last_name) == LARGE_SURNAME);


//Не можу зрозуміти, як правильно було б  написати if elseif else текст, що був в умові задачі.
