<?php
/*Egy változóban megadott egész értéket (másodpercek) alakítsuk át órában és jelenítsük
meg. A megjelenítéskor használjunk változó behelyettesítést (variable interpolation) illetve
HTML címkéket (pld. kiemelésre). Az előző műveletet csak akkor végezzük el, ha egész
számunk van, különben egy megfelelő üzenetet írunk ki.
 */


$megadottIdo = rand(-99999,999999);

if (is_int($megadottIdo)) {

    $ora = $megadottIdo / 3600;
    echo "<p>A megadott idő $megadottIdo SEC ami $ora óra.</p>";
} else {
    echo "<p>Hiba! AZ IDŐ NEM EGÉSZ SZÁM.</p> ";
}


