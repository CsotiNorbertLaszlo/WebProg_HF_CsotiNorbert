<?php
/*  Egy számológép működését szimuláljuk egy switch utasítás segítségével. Bemenet két szám
és egy műveleti jel. Figyeljünk a 0-val való osztásra és az érvénytelen műveleti jelre.
Ezekben az esetekben jelenítsünk meg egy üzenetet.*/


echo "Kérem, adja meg az első számot: ";
$szam1 = (float)readline();

echo "Kérem, adja meg a második számot: ";
$szam2 = (float)readline();

echo "Kérem, adja meg a műveleti jelet (+, -, *, /): ";
$muvelet = readline();

switch ($muvelet) {
    case '+':
        $eredmeny = $szam1 + $szam2;
        break;
    case '-':
        $eredmeny = $szam1 - $szam2;
        break;
    case '*':
        $eredmeny = $szam1 * $szam2;
        break;
    case '/':
        if ($szam2 != 0) {
            $eredmeny = $szam1 / $szam2;
        } else {
            echo "Hiba: Nullával való osztás nem megengedett.\n";
            exit;
        }
        break;
    default:
        echo "Hiba: Érvénytelen műveleti jel.\n";
        exit;
}

echo "Eredmény: $szam1 $muvelet $szam2 = $eredmeny\n";

