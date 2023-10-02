<?php
/*Írassál ki egy 3x3-as sakktáblát. Használjunk heredoc megjelenítést.*/


$sakktabla = <<<EOT

 W | B | W
---|---|---
 B | W | B
---|---|---
 W | B | W

EOT;

echo $sakktabla;