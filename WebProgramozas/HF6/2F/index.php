<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php
// JELJSZÓ ELLENŐRZÉS

if (isset($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $interests = $_POST['interests'];
    $country = $_POST['country'];

    if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password)) {
        echo 'A jelszónak tartalmaznia kell legalább egy numerikus karaktert, egy nagy betűt, és legalább 8-12 
        karakter hosszúnak kell lennie,';
    }
    if ($password !== $confirmPassword) {
        echo 'A jelszó nem egyezik';
    }
    if (empty($name)) {
        echo '<p>A név mező nem lehet üres.</p>';
    }
    if (!isset($errors)) {
        echo "<h2>Beküldött adatok:</h2>";
        echo "<p>Név: $name</p>";
        echo "<p>E-mail cím: $email</p>";
        echo "<p>Jelszó: $password</p>";
        echo "<p>Jelszó megerősítése: $confirmPassword</p>";
        echo "<p>Születési dátum: $birthdate</p>";
        echo "<p>Nem: $gender</p>";

        if (!empty($interests)) {
            echo "<p>Érdeklődési területek:</p>";
            echo "<ul>";
            foreach ($interests as $interest) {
                echo "<li>$interest</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Érdeklődési területek: (nincs kiválasztva)</p>";
        }

        if (!empty($country)) {
            echo "<p>Ország: $country</p>";
        } else {
            echo "<p>Ország: (nem választott)</p>";
        }
    }

}

?>
<form method="post">
    <table>
        <tr>
            <td><label for="name">Név:</label></td>
            <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
            <td><label for="email">E-mail cím:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="password">Jelszó:</label></td>
            <td><input type="password" id="password" name="password" required></td>
        </tr>
        <tr>
            <td><label for="confirmPassword">Jelszó megerősítése:</label></td>
            <td><input type="password" id="confirmPassword" name="confirmPassword" required></td>
        </tr>
        <tr>
            <td><label for="birthdate">Születési dátum:</label></td>
            <td><input type="date" id="birthdate" name="birthdate" required></td>
        </tr>
        <tr>
            <td><label>Nem:</label></td>
            <td>
                <label><input type="radio" name="gender" value="male">Férfi</label>
                <label><input type="radio" name="gender" value="female">Nő</label>
            </td>
        </tr>
        <tr>
            <td><label>Érdeklődési területek:</label></td>
            <td>
                <label><input type="checkbox" name="interests[]" value="sport">Sport</label>
                <label><input type="checkbox" name="interests[]" value="art">Gaming</label>
                <label><input type="checkbox" name="interests[]" value="science">Tudomány</label>

            </td>
        </tr>
        <tr>
            <td><label for="country">Ország:</label></td>
            <td>
                <select id="country" name="country">
                    <option value="hu">Magyarország</option>
                    <option value="us">Egyesült Államok</option>
                    <option value="us">Románia</option>
                    <option value="us">Üzbegisztán</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Regisztráció"></td>
        </tr>
    </table>
</form>


</body>
</html>
