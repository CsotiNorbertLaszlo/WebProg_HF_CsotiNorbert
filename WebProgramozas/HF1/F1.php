<?php

$tomb = [5, '5', '05', 12.3, '16.7', 'five', 'true', 0xDECAFBAD, '10e200'];

foreach ($tomb as $elem) {
    if (is_numeric($elem)) {
        echo gettype($elem) . " Igen\n";
    } else {
        echo gettype($elem) . " Nem\n";
    }
}

?>