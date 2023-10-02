<?php
$backgroundColor = 'blue';

$szorzotabla = function ($n) {
global $backgroundColor;
$html = '<table border="1" cellpadding="10">';
    for ($i = 1; $i <= $n; $i++) {
    $html .= '<tr>';
        for ($j = 1; $j <= $n; $j++) {
        $cellValue = $i === $j ? $i * $i : $i * $j;
        $cellBgColor = $i === $j ? $backgroundColor : 'white';
        $html .= '<td style="background-color:' . $cellBgColor . ';">' . $cellValue . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
return $html;
};

$n = 10;
echo $szorzotabla($n);
?>