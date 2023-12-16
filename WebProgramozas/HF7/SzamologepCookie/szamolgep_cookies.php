<?php
function calculate()
{
    session_start();

    // Ha nincs még szám a sütiben, generálunk egyet
    if (!isset($_SESSION['randomNumber'])) {
        $_SESSION['randomNumber'] = rand(1, 10);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $szam1 = $_POST['szam1'];
        $szam2 = $_POST['szam2'];
        $muvelet = $_POST['muv'];

        $eredmeny = null;

        if (!is_numeric($szam1) || !is_numeric($szam2)) {
            echo "Mindkét számnak számnak kell lennie!";
        } else {
            switch ($muvelet) {
                case "+":
                    $eredmeny = $szam1 + $szam2;
                    break;
                case "-":
                    $eredmeny = $szam1 - $szam2;
                    break;
                case "*":
                    $eredmeny = $szam1 * $szam2;
                    break;
                case "/":
                    if ($szam2 == 0) {
                        echo "Nullával való osztás nem megengedett!";
                    } else {
                        $eredmeny = $szam1 / $szam2;
                    }
                    break;
                default:
                    echo "Érvénytelen művelet!";
            }

            if ($eredmeny !== null) {
                echo "<h2>Számológép eredménye:</h2>";
                echo "<table border='1'>";
                echo "<tr><td>Első szám:</td><td>$szam1</td></tr>";
                echo "<tr><td>Második szám:</td><td>$szam2</td></tr>";
                echo "<tr><td>Művelet:</td><td>$muvelet</td></tr>";
                echo "<tr><td>Eredmény:</td><td>$eredmeny</td></tr>";
                echo "</table>";

                // Ellenőrizzük a felhasználó által megadott számot
                if ($eredmeny == $_SESSION['randomNumber']) {
                    echo "<p>Gratulálunk, eltaláltad a számot!</p>";
                    unset($_SESSION['randomNumber']); // Töröljük a sütiből az adatot
                } else {
                    echo "<p>Próbáld újra!</p>";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Számológép</title>
</head>
<body>
<table border="1">
    <tr>
        <td>
            <form method="POST" action="">
                <label for="szam1">Az első szám:</label><br>
                <input type="number" id="szam1" name="szam1"><br>
                <label for="szam2">A második szám:</label><br>
                <input type="number" id="szam2" name="szam2"><br>
                <label for="muv">Műveleti jel:</label><br>
                <select id="muv" name="muv">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select><br>
                <input type="submit" name="elkuld" value="Számol">
            </form>
        </td>
    </tr>
</table>

<?php calculate(); ?>
</body>
</html>
