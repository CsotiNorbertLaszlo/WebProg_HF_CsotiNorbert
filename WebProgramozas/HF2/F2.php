<?php
$orszagok = array(
    "Magyarország" => "Budapest",
    "Románia" => "Bukarest",
    "Belgium" => "Brussels",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

foreach ($orszagok as $orszag => $varos) {
    echo '<p>';
    echo '<span style="color: black;">' . $orszag . ' fővárosa </span>';
    echo '<span style="color: red;">' . $varos . '</span>';
    echo '</p>';
}