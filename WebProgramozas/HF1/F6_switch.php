<?php
echo "Adja meg a hónap számát: ";
$honap = (int)readline();

if ($honap >= 1 && $honap <= 12) {
    switch ($honap) {
        case 3:
        case 4:
        case 5:
            echo "Tavasz\n";
            break;
        case 6:
        case 7:
        case 8:
            echo "Nyár\n";
            break;
        case 9:
        case 10:
        case 11:
            echo "Ősz\n";
            break;
        default:
            echo "Tél\n";
            break;
    }
} else {
    echo "Minimum 1 és Maximum 12 kell a számnak lennie.\n";
}


