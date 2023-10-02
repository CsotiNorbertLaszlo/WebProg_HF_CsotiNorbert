    <?php
/* Írjál programot, a 4 alapművelet és hatványozás tesztelésére. A bemenő két értéket két
változóban adjuk meg. A kiírásnak legyen egy szöveges része is, amelyet összefűzzük az
eredménnyel. */

$valtozo1 = rand(-999,999);
$valtozo2 = rand(-999,999);

echo "OSSZEADAS: ", $valtozo1, " + ",$valtozo2, " = ", $valtozo1 + $valtozo2,"\n";
echo "KIVONAS: ", $valtozo1, " - ",$valtozo2, " = ", $valtozo1 - $valtozo2,"\n";
echo "SZORZAS: ", $valtozo1, " X ",$valtozo2, " = ", $valtozo1 * $valtozo2,"\n";
echo "OSZTAS: ", $valtozo1, " / ",$valtozo2, " = ", $valtozo1 / $valtozo2,"\n";
echo "HATVANYOZAS: ", $valtozo1, " ^ ",$valtozo2, " = ", pow($valtozo1,$valtozo2),"\n";