<?php
function atalakitEsKiir($tomb, $muvelet) {
    if ($muvelet === "kisbetus") {
        $atalakitottTomb = array_map('strtolower', $tomb);
    } elseif ($muvelet === "nagybetus") {
        $atalakitottTomb = array_map('strtoupper', $tomb);
    } else {
        return;
    }

    foreach ($atalakitottTomb as $kulcs => $ertek) {
        echo $kulcs . ': ' . $ertek . "\n";
    }
}

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');

echo "Kisbetűs:\n";
atalakitEsKiir($szinek, "kisbetus");

echo "\nNagybetűs:\n";
atalakitEsKiir($szinek, "nagybetus");